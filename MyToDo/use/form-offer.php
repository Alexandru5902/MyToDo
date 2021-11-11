<?php
if(!defined('AREA')) { die('Access denied'); }
if(user_ajax != 1) { include('nopage.php'); exit(); }
//submit
$errmsg = '';

if((isset($_REQUEST['offer_click'])) && ($_REQUEST['offer_click'] == 1)) {
    //prepare data
    $post = $db->clean($_REQUEST);
    unset($_REQUEST);
    
    //verifications
	if(strlen($post['offer_name']) < 2) { $errmsg .= "Introduceti numele. (min 2  characters)<br />";}
    if(strlen($post['offer_phone']) < 14) { $errmsg .= "Introduceti numarul de telefon.<br />"; }
    if(strlen($post['offer_email']) < 2) {$errmsg .= "Introduceti adresa de email.<br />";} elseif(!checkEmail($post['offer_email'])) {$errmsg .= "Adresa de email nu este valida<br />";}
	if(strlen($post['offer_type']) < 2) {$errmsg .= "Introduceti tipul evenimentului.<br />"; }
	if(strlen($post['offer_message']) < 2) {$errmsg .= "Introduceti un mesaj.<br />";}


  //try to update
	if($errmsg == "") {
        $msg = '';
        $msg .= "Email <strong>Homepage Vizionare</strong><br /><br />";
        $msg .= "Solicitare oferta <br />";
		$msg .= "Nume: ".$post['offer_name']."<br />";
        $msg .= "Telefon: ".$post['offer_phone']."<br />";
        $msg .= "Email: ".$post['offer_email']."<br />";
        $msg .= "Tip Eveniment: ".$post['offer_type']."<br />";
        $msg .= "Mesaj: ".$post['offer_message']."<br />";
        $msg .= "Mesaj trimis la ".TIMP." de pe adresa de ip: ".myip.".<br />";

		send_notification(1, email_to, $msg, '','offer Form');
		$errmsg = 'Mesajul a fost trimis cu succes. Multumim.<br />';
        unset($_GET);

        ?> 

        <div class="mainbox dirrectmessage">
            <div class="accountForm">
                <div class="logo">
                    <img src="/static/images/logo.png" width="280" height="50" alt="AraSound Logo" />
                </div>
                <div class="mainbox-text">
                    <div class="subtitle">Solicita oferta</div>
                    <div class="rowline">Mesajul dumneavoastra<br> a fost trimis cu succes.</div>
                    <div class="inputline"><div class="btn"><button type="submit" class="button upper hvr-fade" onclick="closePopup(1)">închide</button></div></div>
                </div>
            </div>
            <div class="image">
            </div>
        </div>

        <?
            exit;
    }

    //reset data 
	$_GET = $db->show_encode($post);
	unset($post);

}

?>
<div class="mainpage get-offer">
    <!-- <h3>Solicita oferta</h3> -->
    <? if($errmsg != '') { ?><div class="notification alert alert-danger"><button type="button" class="close">&times;</button><?=$errmsg?></div><? } ?>
    <div class="mainbox">
        <div class="accountForm">
            <div class="logo">
                <img src="/static/images/logo.png" width="280" height="50" alt="AraSound Logo" />
            </div>
            <div class="subtitle">Solicită ofertă personalizată.</div>
            <div class="text">Completeaza si trimite formularul pentru a solicita o oferta. Un reprezentant te va contacta in cel mai scurt timp.</div>
            <div class="form">
                <form action="" method="post" name="getOffer" id="getOffer" onsubmit="return GetOffer(1);">
                    <?=create_input_hidden('offer_click', '1');?>
                    <div class="inputline"><label><span class="field"><?=create_input_text('offer_name', '', '', ' placeholder="Nume"');?></span></label></div>	
                    <div class="inputline"><label><span class="field"><?=create_input_text('offer_phone', '', 'mask-input-phone', ' placeholder="Telefon"');?></span></div>
                    <div class="inputline"><label><span class="field"><?=create_input_text('offer_email', '', '', ' placeholder="Email"');?></span></label></div>
                    <div class="inputline"><label><span class="field"><?=create_input_text('offer_type', '', '', ' placeholder="Tip Eveniment"');?></span></label></div>
                    <div class="inputline"><label><span class="field"><?=create_input_textarea('offer_message', '', 'textarea', ' placeholder="Mesaj"'); ?></span></div>
                    <div class="inputline normal-checkbox"><?=create_input_chk('offer_check', 'checkbox', '', ' placeholder=""');?><label class="check-error-label" for="offer_check"><span>Am citit si sunt de acord cu <a href="/termeni">termenii si conditiile</a> site-ului. Confirm ca am peste 16 ani.</span><span class="check-error"></span></label></div>	
                    <div class="inputline"><div class="btn"><button type="submit" class="button upper hvr-fade">Trimite</button></div></div>
                    <div class="clear"></div>
                </form>
                <div class="clear"></div>
            </div>
        </div>
        <div class="image">
        </div>		
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$("#getOffer").validate({
		rules: {
			offer_name: { required: true, minlength: 2 },
            offer_phone: { required: true, minlength: 14},
            offer_email: { required: { depends:function(){ $(this).val($.trim($(this).val())); return true; } }, email: true },
            offer_type: { required: true, minlength: 2},
			offer_message: { required: true, minlength: 2 },
            offer_check: { required: true}
		},
		messages: {
			offer_name: { required: "Introduceti numele.", minlength: "Numele trebuie sa aiba min 2 caractere." },
            offer_phone: { required: "Introduceti numarul de telefon.", minlength: "Numarul de telefon trebuie sa aiba 14 caractere."},
            offer_email: { required: "Introduceti email-ul."},
			offer_type: { required: "Introduceti tipul evenimentului.", minlength: "Tipul evenimentului trebuie sa aiba min 2 caractere." },
			offer_message: { required: "Introduceti un mesaj.", minlength: "Mesajul trebuie sa aiba min 2 caractere." },
            offer_check: { required: "Acceptati termenii si conditiile si confirmati ca aveti varsta peste 16 ani."}
        },
        ignore:'',
        errorPlacement: function(error, element) {
            if (element.attr("name") == "offer_check"){
                let error_html = $(error).html();
                $(".check-error").show();
                $(".check-error").html( error_html );  
            }else
                error.insertAfter(element);
        },
        success: function(label,element) {
        },
	});
	// CONTACT PAGE
	$(".mask-input-phone").mask("(000) 0000 000");

	$(".notification .close").click(function () {
        $(this).parent('.notification').slideUp("slow");
    });
});
</script>