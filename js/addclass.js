// loader
	setTimeout(function(){
				let modal_id = document.getElementById("hugegang_loader");
				modal_id.style.display = "none";
		; }, 100);	

function first_mobile_number() {
		var number_value2 = document.getElementById("mobile_number").value;
		var number_btn2 = document.getElementById("Continue_btn1_m");
		if(number_value2 == ""){
			number_btn2.classList.remove("bgclr");
			}
		else{
			number_btn2.classList.add("bgclr");
		}
	}

// login with mobile number
		function login_with_mobile_show(){
			let loginwith = document.getElementById("loginwith_page");
			let mobile_form_show = document.getElementById("mobile_form_show");
			loginwith.classList.add("loginwithformaddclass");
			mobile_form_show.classList.add("left_divs_show");
		}
		function login_with_mobile_hide(){
			let loginwith = document.getElementById("loginwith_page");
			let mobile_form_show = document.getElementById("mobile_form_show");
			loginwith.classList.remove("loginwithformaddclass");
			mobile_form_show.classList.remove("left_divs_show");
		}
		document.getElementById("show_mobile_fst_form").addEventListener("click", login_with_mobile_show);
		document.getElementById("rm_mobile_show").addEventListener("click", login_with_mobile_hide);

		// mobile form email
		function mobile_email_show(){
			let mobile_form_show2 = document.getElementById("mobile_form_show");
			let mobile_form_email = document.getElementById("mobile_form_email");
			mobile_form_show2.classList.add("loginwithformaddclass");
			mobile_form_email.classList.add("left_divs_show");
		}
		function mobile_email_hide(){
			let mobile_form_show2 = document.getElementById("mobile_form_show");
			let mobile_form_email = document.getElementById("mobile_form_email");
			mobile_form_show2.classList.remove("loginwithformaddclass");
			mobile_form_email.classList.remove("left_divs_show");
		}
		document.getElementById("mobile_form_loginemail").addEventListener("click", mobile_email_show);
		document.getElementById("remove_mobile_form_email").addEventListener("click", mobile_email_hide);

	

		// login mobile otp
		function loginmobile_otp_show(){
			let login_mobile_form = document.getElementById("mobile_form_show");
			let login_opt = document.getElementById("login_mobile_opt");
			login_mobile_form.classList.add("loginwithformaddclass");
			login_opt.classList.add("left_divs_show");
		}
		function loginmobile_otp_hide(){
			let login_mobile_form = document.getElementById("mobile_form_show");
			let login_opt = document.getElementById("login_mobile_opt");
			login_mobile_form.classList.remove("loginwithformaddclass");
			login_opt.classList.remove("left_divs_show");
		}
		document.getElementById("show_mibile_otp").addEventListener("click", loginmobile_otp_show);
		document.getElementById("remove_login_mobile_opt").addEventListener("click", loginmobile_otp_hide);



	// start multi step form
	function multistepform1_show(){
			let  mobile_opt2 = document.getElementById("login_mobile_opt");
			let multistep_1st = document.getElementById("multistep_1st");
			mobile_opt2.classList.add("loginwithformaddclass");
			multistep_1st.classList.add("left_divs_show");
		}
		function multistepform1_hide(){
			let  mobile_opt2 = document.getElementById("login_mobile_opt");
			let multistep_1st = document.getElementById("multistep_1st");
			mobile_opt2.classList.remove("loginwithformaddclass");
			multistep_1st.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform").addEventListener("click", multistepform1_show);
		document.getElementById("remove_multistepform1").addEventListener("click", multistepform1_hide);

		// start multi step form 2
	function multistepform2_show(){
			let  multistep_1st = document.getElementById("multistep_1st");
			let multistep_2 = document.getElementById("multistep_2");
			multistep_1st.classList.add("loginwithformaddclass");
			multistep_2.classList.add("left_divs_show");
		}
		function multistepform2_hide(){
			let  multistep_1st = document.getElementById("multistep_1st");
			let multistep_2 = document.getElementById("multistep_2");
			multistep_1st.classList.remove("loginwithformaddclass");
			multistep_2.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform2").addEventListener("click", multistepform2_show);
		document.getElementById("remove_multistepform2").addEventListener("click", multistepform2_hide);

		// start multi step form 3
	function multistepform3_show(){
			let  multistep_3rd = document.getElementById("multistep_2");
			let multistep_3 = document.getElementById("multistep_3");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform3_hide(){
			let  multistep_3rd = document.getElementById("multistep_2");
			let multistep_3 = document.getElementById("multistep_3");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform3").addEventListener("click", multistepform3_show);
		document.getElementById("remove_multistepform3").addEventListener("click", multistepform3_hide);

		// start multi step form 4
	function multistepform4_show(){
			let  multistep_3rd = document.getElementById("multistep_3");
			let multistep_4 = document.getElementById("multistep_4");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_4.classList.add("left_divs_show");
		}
		function multistepform4_hide(){
			let  multistep_3rd = document.getElementById("multistep_3");
			let multistep_4 = document.getElementById("multistep_4");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_4.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform4").addEventListener("click", multistepform4_show);
		document.getElementById("remove_multistepform4").addEventListener("click", multistepform4_hide);

		// start multi step form 5
	function multistepform5_show(){
			let  multistep_3rd = document.getElementById("multistep_4");
			let multistep_3 = document.getElementById("multistep_5");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform5_hide(){
			let  multistep_3rd = document.getElementById("multistep_4");
			let multistep_3 = document.getElementById("multistep_5");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform5").addEventListener("click", multistepform5_show);
		document.getElementById("remove_multistepform5").addEventListener("click", multistepform5_hide);

			// start multi step form 6
	function multistepform6_show(){
			let  multistep_3rd = document.getElementById("multistep_5");
			let multistep_3 = document.getElementById("multistep_6");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform6_hide(){
			let  multistep_3rd = document.getElementById("multistep_5");
			let multistep_3 = document.getElementById("multistep_6");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform6").addEventListener("click", multistepform6_show);
		document.getElementById("remove_multistepform6").addEventListener("click", multistepform6_hide);

			// start multi step form 7
	function multistepform7_show(){
			let  multistep_3rd = document.getElementById("multistep_6");
			let multistep_3 = document.getElementById("multistep_7");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform7_hide(){
			let  multistep_3rd = document.getElementById("multistep_6");
			let multistep_3 = document.getElementById("multistep_7");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform7").addEventListener("click", multistepform7_show);
		document.getElementById("remove_multistepform7").addEventListener("click", multistepform7_hide);

		// start multi step form 8
	function multistepform8_show(){
			let  multistep_3rd = document.getElementById("multistep_7");
			let multistep_3 = document.getElementById("multistep_8");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform8_hide(){
			let  multistep_3rd = document.getElementById("multistep_7");
			let multistep_3 = document.getElementById("multistep_8");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform8").addEventListener("click", multistepform8_show);
		document.getElementById("remove_multistepform8").addEventListener("click", multistepform8_hide);

		// start multi step form 9
	function multistepform9_show(){
			let  multistep_3rd = document.getElementById("multistep_8");
			let multistep_3 = document.getElementById("multistep_9");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform9_hide(){
			let  multistep_3rd = document.getElementById("multistep_8");
			let multistep_3 = document.getElementById("multistep_9");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform9").addEventListener("click", multistepform9_show);
		document.getElementById("remove_multistepform9").addEventListener("click", multistepform9_hide);

		// start multi step form 10
	function multistepform10_show(){
			let  multistep_3rd = document.getElementById("multistep_9");
			let multistep_3 = document.getElementById("multistep_10");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform10_hide(){
			let  multistep_3rd = document.getElementById("multistep_9");
			let multistep_3 = document.getElementById("multistep_10");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform10").addEventListener("click", multistepform10_show);
		document.getElementById("remove_multistepform10").addEventListener("click", multistepform10_hide);

		// start enbale location
	function multistepform11_show(){
			let  multistep_3rd = document.getElementById("multistep_10");
			let multistep_3 = document.getElementById("multistep_11");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		document.getElementById("show_multi_stepform11").addEventListener("click", multistepform11_show);

		// start enbale location
	function multistepform12_show(){
			let  multistep_3rd = document.getElementById("multistep_11");
			let multistep_3 = document.getElementById("multistep_12");
			multistep_3rd.classList.add("loginwithformaddclass");
			multistep_3.classList.add("left_divs_show");
		}
		function multistepform12_hide(){
			let  multistep_3rd = document.getElementById("multistep_11");
			let multistep_3 = document.getElementById("multistep_12");
			multistep_3rd.classList.remove("loginwithformaddclass");
			multistep_3.classList.remove("left_divs_show");
		}
		document.getElementById("show_multi_stepform12").addEventListener("click", multistepform12_show);
		document.getElementById("remove_multistepform12").addEventListener("click", multistepform12_hide);

	// account recovery
		function recovery_show(){
			let loginwith2 = document.getElementById("loginwith_page");
			let account_recovery = document.getElementById("account_recovery");
			loginwith2.classList.add("loginwithformaddclass");
			account_recovery.classList.add("left_divs_show");
		}
		function recovery_hide(){
			let loginwith2 = document.getElementById("loginwith_page");
			let account_recovery = document.getElementById("account_recovery");
			loginwith2.classList.remove("loginwithformaddclass");
			account_recovery.classList.remove("left_divs_show");
		}
		document.getElementById("login_recovery").addEventListener("click", recovery_show);
		document.getElementById("remove_account_recovery").addEventListener("click", recovery_hide);

		// account recovery email
		function recovery_email_show(){
			let recovery = document.getElementById("account_recovery");
			let account_recovery = document.getElementById("recovery_email");
			recovery.classList.add("loginwithformaddclass");
			account_recovery.classList.add("left_divs_show");
		}
		function recovery_email_hide(){
			let recovery = document.getElementById("account_recovery");
			let account_recovery = document.getElementById("recovery_email");
			recovery.classList.remove("loginwithformaddclass");
			account_recovery.classList.remove("left_divs_show");
		}
		document.getElementById("show_recovery_email").addEventListener("click", recovery_email_show);
		document.getElementById("remove_recovery_email").addEventListener("click", recovery_email_hide);


