


		

//setting addclass
	function showsetting(){
		let setting_cntnt = document.querySelectorAll(".profile_setting")[0];
		let home_anim = document.querySelectorAll(".home_animtion")[0];
		setting_cntnt.classList.add("settingaddclass");
		home_anim.classList.add("addhome_animation");
	}
	function hidesetting(){
		let setting_cntnt = document.querySelectorAll(".profile_setting")[0];
		let home_anim = document.querySelectorAll(".home_animtion")[0];
		setting_cntnt.classList.remove("settingaddclass");
		home_anim.classList.remove("addhome_animation");
	}
	document.querySelectorAll(".home_setting_btn")[0].addEventListener("click", showsetting);
	document.querySelectorAll(".removeclass")[0].addEventListener("click", hidesetting);
	//number addclass
	function shownumber(){
		let mobile_number = document.querySelectorAll(".number_setting")[0];
		let setting_cntnt = document.querySelectorAll(".profile_setting")[0];
		mobile_number.classList.add("numberaddclass");
		setting_cntnt.classList.add("number_animation");
	}
	function hidenumber(){
		let mobile_number = document.querySelectorAll(".number_setting")[0];
		let setting_cntnt = document.querySelectorAll(".profile_setting")[0];
		mobile_number.classList.remove("numberaddclass");
		setting_cntnt.classList.remove("number_animation");
	}
	document.querySelectorAll(".mobile_number")[0].addEventListener("click", shownumber);
	document.querySelectorAll(".removeclass")[1].addEventListener("click", hidenumber);
	//number update addclass
		function showupdatenumber(){
			let mobile_number = document.querySelectorAll(".update_number_cntnt")[0];
			let setting_cntnt = document.querySelectorAll(".number_setting")[0];
			mobile_number.classList.add("left_divs_show");
			setting_cntnt.classList.add("number_animation");
		}
		function hideupdatenumber(){
			let mobile_number = document.querySelectorAll(".update_number_cntnt")[0];
			let setting_cntnt = document.querySelectorAll(".number_setting")[0];
			mobile_number.classList.remove("left_divs_show");
			setting_cntnt.classList.remove("number_animation");
		}
		document.querySelectorAll(".phone_numbers")[0].addEventListener("click", showupdatenumber);
		document.querySelectorAll(".removeclass")[2].addEventListener("click", hideupdatenumber);

//Otp addclass
		function showotp(){
			let mobile_number = document.getElementById("otp_animtion");
			let setting_cntnt = document.getElementById("ubdate_number");
			mobile_number.classList.add("left_divs_show");
			setting_cntnt.classList.add("number_animation");
		}
		function hideotp(){
			let mobile_number = document.getElementById("otp_animtion");
			let setting_cntnt = document.getElementById("ubdate_number");
			mobile_number.classList.remove("left_divs_show");
			setting_cntnt.classList.remove("number_animation");
		}
		document.querySelectorAll("#cuntinue_btn2")[0].addEventListener("click", showotp);
		document.querySelectorAll(".otp_remove")[0].addEventListener("click", hideotp);

		//Otp send Modal
		function show_modal(){
			let modal_id = document.getElementById("send_otp_modal");
			modal_id.classList.add("modal_show");
		}
		document.getElementById("otp_resend_btn").addEventListener("click", show_modal);
		document.getElementById("otp_resend_btn").addEventListener("click", function(){
			setTimeout(function(){
				let modal_id = document.getElementById("send_otp_modal");
				modal_id.classList.remove("modal_show");
				; }, 4000);	
		});
		
//Oops addclass
		function showops(){
			let oops_ = document.getElementById("oops_show");
			let opt_ani = document.getElementById("otp_animtion");
			oops_.classList.add("left_divs_show");
			opt_ani.classList.add("number_animation");
		}
		function hideops(){
			let oops_ = document.getElementById("oops_show");
			let opt_ani = document.getElementById("otp_animtion");
			oops_.classList.remove("left_divs_show");
			opt_ani.classList.remove("number_animation");
		}
		document.getElementById("cuntinue_btn3").addEventListener("click", showops);
		document.getElementById("oops_remove").addEventListener("click", hideops);

		//loginemail addclass
		function email_login_show(){
			let login_email = document.getElementById("login_email2");
			let update2 = document.getElementById("ubdate_number");
			login_email.classList.add("left_divs_show");
			update2.classList.add("number_animation");
		}
		function email_login_hide(){
			let login_email = document.getElementById("login_email2");
			let update2 = document.getElementById("ubdate_number");
			login_email.classList.remove("left_divs_show");
			update2.classList.remove("number_animation");
		}
		document.getElementById("login_email").addEventListener("click", email_login_show);
		document.getElementById("loginemail_remove").addEventListener("click", email_login_hide);


	// oninput
	function ininput_showbtn() {
		var number_value = document.getElementById("myInput").value;
		var number_btn = document.getElementById("cuntinue_btn2");
		if(number_value == ""){
			number_btn.classList.remove("bgclr");
			}
		else{
			number_btn.classList.add("bgclr");
		}
	}

	function ininput_showbtn2() {
		var number_value = document.getElementById("myInput2").value;
		var number_btn = document.getElementById("cuntinue_btn2");
		if(number_value == ""){
			number_btn.classList.remove("bgclr");
			}
		else{
			number_btn.classList.add("bgclr");
		}
	}

// otp 
function keyfressFun1() {
		var back_ = document.getElementById("otp_input1").value;
		if (back_[0] == null) {
			document.getElementById("otp_input1").focus();
		}else{
			document.getElementById("otp_input2").focus();
		}

	}
	function keyfressFun2() {
		var back_1 = document.getElementById("otp_input2").value;
		if (back_1[0] == null) {
			document.getElementById("otp_input1").select(focus());
		}else{
			document.getElementById("otp_input3").select(focus());
		}
	}
	function keyfressFun3() {
		var back_2 = document.getElementById("otp_input3").value;
		if (back_2[0] == null) {
			document.getElementById("otp_input2").select(focus());
		}else{
			document.getElementById("otp_input4").select(focus());
		}

	}
	function keyfressFun4() {
		var back_3 = document.getElementById("otp_input4").value;
		if (back_3[0] == null) {
			document.getElementById("otp_input3").select(focus());
		}else{
			document.getElementById("otp_input5").select(focus());
		}

	}
	function keyfressFun5() {
		var back_4 = document.getElementById("otp_input5").value;
		if (back_4[0] == null) {
			document.getElementById("otp_input4").select(focus());
		}else{
			document.getElementById("otp_input6").select(focus());
		}
	}
	function keyfressFun6() {
		var back_5 = document.getElementById("otp_input6").value;
		if (back_5[0] == null ) {
			document.getElementById("otp_input5").select(focus());
			document.getElementById("cuntinue_btn3").classList.remove("bgclr");
		}else{
			document.getElementById("otp_input6").select(focus());
			document.getElementById("cuntinue_btn3").classList.add("bgclr");
		}
		
	}
	// location show and hide
		function location_show(){
			let loction_div = document.querySelectorAll(".locationhide_cntnt")[0];
			document.getElementById("myloction_btn").style.display = "none";
			loction_div.classList.add("heightshow");
		}
		document.getElementById("myloction_btn").addEventListener("click", location_show);


		//show me moman addclass
		function woman_show(){
			let show_me = document.getElementById("show_me_woman_cntnt");
			let update3 = document.getElementById("profile_setting");
			show_me.classList.add("left_divs_show");
			update3.classList.add("number_animation");
		}
		function woman_hide(){
			let show_me = document.getElementById("show_me_woman_cntnt");
			let update3 = document.getElementById("profile_setting");
			show_me.classList.remove("left_divs_show");
			update3.classList.remove("number_animation");
		}
		document.getElementById("show_me_women").addEventListener("click", woman_show);
		document.getElementById("remove_women").addEventListener("click", woman_hide);

		//Feed me addclass
		function feedme_show(){
			let feed_me = document.getElementById("feed_me");
			let update4 = document.getElementById("profile_setting");
			feed_me.classList.add("left_divs_show");
			update4.classList.add("number_animation");
		}
		function feedme_hide(){
			let feed_me = document.getElementById("feed_me");
			let update4 = document.getElementById("profile_setting");
			feed_me.classList.remove("left_divs_show");
			update4.classList.remove("number_animation");
		}
		document.getElementById("show_feed_cntnt").addEventListener("click", feedme_show);
		document.getElementById("remove_feed").addEventListener("click", feedme_hide);

		//autoplay addclass
		function audo_show(){
			let audo_play = document.getElementById("audo_play");
			let update5 = document.getElementById("profile_setting");
			audo_play.classList.add("left_divs_show");
			update5.classList.add("number_animation");
		}
		function audoe_hide(){
			let audo_play = document.getElementById("audo_play");
			let update5 = document.getElementById("profile_setting");
			audo_play.classList.remove("left_divs_show");
			update5.classList.remove("number_animation");
		}
		document.getElementById("show_auto_cntnt").addEventListener("click", audo_show);
		document.getElementById("remove_audo").addEventListener("click", audoe_hide);

		//userName addclass
		function username_show(){
			let username_cntnt = document.getElementById("username_cntnt");
			let update6 = document.getElementById("profile_setting");
			username_cntnt.classList.add("left_divs_show");
			update6.classList.add("number_animation");
		}
		function username_hide(){
			let username_cntnt = document.getElementById("username_cntnt");
			let update6 = document.getElementById("profile_setting");
			username_cntnt.classList.remove("left_divs_show");
			update6.classList.remove("number_animation");
		}
		document.getElementById("show_username").addEventListener("click", username_show);
		document.getElementById("remove_username").addEventListener("click", username_hide);

		//hugegang addclass
		function huge_show(){
			let hugecntnt = document.getElementById("hugegang_cntnt");
			let update7 = document.getElementById("profile_setting");
			hugecntnt.classList.add("left_divs_show");
			update7.classList.add("number_animation");
		}
		function huge_hide(){
			let hugecntnt = document.getElementById("hugegang_cntnt");
			let update7 = document.getElementById("profile_setting");
			hugecntnt.classList.remove("left_divs_show");
			update7.classList.remove("number_animation");
		}
		document.getElementById("show_hugegang").addEventListener("click", huge_show);
		document.getElementById("remove_hugegang").addEventListener("click", huge_hide);

		//read receipts addclass
		function recipts_show(){
			let receipts_cntnt = document.getElementById("receipts_cntnt");
			let update8 = document.getElementById("profile_setting");
			receipts_cntnt.classList.add("left_divs_show");
			update8.classList.add("number_animation");
		}
		function recipts_hide(){
			let receipts_cntnt = document.getElementById("receipts_cntnt");
			let update8 = document.getElementById("profile_setting");
			receipts_cntnt.classList.remove("left_divs_show");
			update8.classList.remove("number_animation");
		}
		document.getElementById("show_read_receipts").addEventListener("click", recipts_show);
		document.getElementById("remove_receipts").addEventListener("click", recipts_hide);

		//swipe addclass
		function swipe_show(){
			let swipe_cntnt = document.getElementById("swipe_cntnt");
			let update9 = document.getElementById("profile_setting");
			swipe_cntnt.classList.add("left_divs_show");
			update9.classList.add("number_animation");
		}
		function swipe_hide(){
			let swipe_cntnt = document.getElementById("swipe_cntnt");
			let update9 = document.getElementById("profile_setting");
			swipe_cntnt.classList.remove("left_divs_show");
			update9.classList.remove("number_animation");
		}
		document.getElementById("show_swipe").addEventListener("click", swipe_show);
		document.getElementById("remove_swipe").addEventListener("click", swipe_hide);

		//email content addclass
		function email_cntnt_show(){
			let email_notif = document.getElementById("email_notif_cntnt");
			let update10 = document.getElementById("profile_setting");
			email_notif.classList.add("left_divs_show");
			update10.classList.add("number_animation");
		}
		function email_cntnt_hide(){
			let email_notif = document.getElementById("email_notif_cntnt");
			let update10 = document.getElementById("profile_setting");
			email_notif.classList.remove("left_divs_show");
			update10.classList.remove("number_animation");
		}
		document.getElementById("show_email_cntnt").addEventListener("click", email_cntnt_show);
		document.getElementById("remove_email_notif").addEventListener("click", email_cntnt_hide);

		//push content addclass
		function push_notifi_show(){
			let push_notif = document.getElementById("push_notif_cntnt");
			let update11 = document.getElementById("profile_setting");
			push_notif.classList.add("left_divs_show");
			update11.classList.add("number_animation");
		}
		function push_notifi_hide(){
			let push_notif = document.getElementById("push_notif_cntnt");
			let update11 = document.getElementById("profile_setting");
			push_notif.classList.remove("left_divs_show");
			update11.classList.remove("number_animation");
		}
		document.getElementById("push_notif_show").addEventListener("click", push_notifi_show);
		document.getElementById("remove_push_notif").addEventListener("click", push_notifi_hide);

		//push content addclass
		function team_hugegang_show(){
			let team_notif = document.getElementById("team_hugegang_cntnt");
			let update12 = document.getElementById("profile_setting");
			team_notif.classList.add("left_divs_show");
			update12.classList.add("number_animation");
		}
		function team_hugegang_hide(){
			let team_notif = document.getElementById("team_hugegang_cntnt");
			let update12 = document.getElementById("profile_setting");
			team_notif.classList.remove("left_divs_show");
			update12.classList.remove("number_animation");
		}
		document.getElementById("team_hugegang").addEventListener("click", team_hugegang_show);
		document.getElementById("remove_team").addEventListener("click", team_hugegang_hide);

		//add media content addclass
		function media_show(){
			let add_media = document.getElementById("add_media_cntnt");
			let home_cntnt = document.getElementById("home_animation_txt");
			add_media.classList.add("left_divs_show");
			home_cntnt.classList.add("number_animation");
		}
		function media_hide(){
			let add_media = document.getElementById("add_media_cntnt");
			let home_cntnt = document.getElementById("home_animation_txt");
			add_media.classList.remove("left_divs_show");
			home_cntnt.classList.remove("number_animation");
		}
		document.getElementById("show_media").addEventListener("click", media_show);
		document.querySelectorAll(".remove_addmedia_cntnt")[0].addEventListener("click", media_hide);

		//edit info content addclass
		function edit_show(){
			let edit_info = document.getElementById("edit_info");
			let home_cntnt2 = document.getElementById("home_animation_txt");
			edit_info.classList.add("left_divs_show");
			home_cntnt2.classList.add("number_animation");
		}
		function edit_hide(){
			let edit_info = document.getElementById("edit_info");
			let home_cntnt2 = document.getElementById("home_animation_txt");
			edit_info.classList.remove("left_divs_show");
			home_cntnt2.classList.remove("number_animation");
		}
		document.getElementById("show_edit_info").addEventListener("click", edit_show);
		document.getElementById("remove_edit_info").addEventListener("click", edit_hide);


		//anthem_setting_add content addclass
		function anthem_show(){
			let feed_me2 = document.getElementById("feed_me");
			let edit_info_ani = document.getElementById("edit_info");
			feed_me2.classList.add("left_divs_show");
			edit_info_ani.classList.add("number_animation");
		}
		function anthem_hide(){
			let feed_me2 = document.getElementById("feed_me");
			let edit_info_ani = document.getElementById("edit_info");
			feed_me2.classList.remove("left_divs_show");
			edit_info_ani.classList.remove("number_animation");
		}
		document.getElementById("anthem_setting_add").addEventListener("click", anthem_show);
		document.getElementById("remove_feed").addEventListener("click", anthem_hide);

		function anthem_show2(){
			let feed_me2 = document.getElementById("feed_me");
			let edit_info_ani = document.getElementById("edit_info");
			feed_me2.classList.add("left_divs_show");
			edit_info_ani.classList.add("number_animation");
		}
		function anthem_hide2(){
			let feed_me2 = document.getElementById("feed_me");
			let edit_info_ani = document.getElementById("edit_info");
			feed_me2.classList.remove("left_divs_show");
			edit_info_ani.classList.remove("number_animation");
		}
		document.getElementById("anthem_setting_add2").addEventListener("click", anthem_show2);
		document.getElementById("remove_feed").addEventListener("click", anthem_hide2);
// show man edit
		function man_show(){
			let edit_man = document.getElementById("edit_mans");
			let edit_info_ani2 = document.getElementById("edit_info");
			edit_man.classList.add("left_divs_show");
			edit_info_ani2.classList.add("number_animation");
		}
		function man_hide(){
			let edit_man = document.getElementById("edit_mans");
			let edit_info_ani2 = document.getElementById("edit_info");
			edit_man.classList.remove("left_divs_show");
			edit_info_ani2.classList.remove("number_animation");
		}
		document.getElementById("edit_men").addEventListener("click", man_show);
		document.getElementById("edit_man_remove").addEventListener("click", man_hide);

		// Sexual edit
		function sexual_show(){
			let edit_exual = document.getElementById("edit_sexual");
			let edit_info_ani3 = document.getElementById("edit_info");
			edit_exual.classList.add("left_divs_show");
			edit_info_ani3.classList.add("number_animation");
		}
		function sexual_hide(){
			let edit_exual = document.getElementById("edit_sexual");
			let edit_info_ani3 = document.getElementById("edit_info");
			edit_exual.classList.remove("left_divs_show");
			edit_info_ani3.classList.remove("number_animation");
		}
		document.getElementById("sexual_show").addEventListener("click", sexual_show);
		document.getElementById("remove_sexual").addEventListener("click", sexual_hide);

		// Sexual edit
		function search_location(){
			document.getElementById("location_result").style.display = "block";
			document.getElementById("nearst_location").style.display = "none";
		}
		document.getElementById("show_search_result").addEventListener("click", search_location);

		// Sexual edit
		function schools_lo_show(){
			let schools_location = document.getElementById("schools_location");
			let edit_info_ani4 = document.getElementById("edit_info");
			schools_location.classList.add("left_divs_show");
			edit_info_ani4.classList.add("number_animation");
		}
		function schools_lo_hide(){
			let schools_location = document.getElementById("schools_location");
			let edit_info_ani4 = document.getElementById("edit_info");
			schools_location.classList.remove("left_divs_show");
			edit_info_ani4.classList.remove("number_animation");
		}
		document.getElementById("show_schools").addEventListener("click", schools_lo_show);
		document.getElementById("remove_schools_loc").addEventListener("click", schools_lo_hide);

		// address_location edit
		function address_lo_show(){
			let address_location = document.getElementById("address_location");
			let edit_info_ani5 = document.getElementById("edit_info");
			address_location.classList.add("left_divs_show");
			edit_info_ani5.classList.add("number_animation");
		}
		function address_lo_hide(){
			let address_location = document.getElementById("address_location");
			let edit_info_ani5 = document.getElementById("edit_info");
			address_location.classList.remove("left_divs_show");
			edit_info_ani5.classList.remove("number_animation");
		}
		document.getElementById("show_adress").addEventListener("click", address_lo_show);
		document.getElementById("remove_address_lo").addEventListener("click", address_lo_hide);

		// search anthem edit
		function anthem2_show(){
			let search_anthem2 = document.getElementById("search_anthem2");
			let edit_info_ani6 = document.getElementById("edit_info");
			search_anthem2.classList.add("left_divs_show");
			edit_info_ani6.classList.add("number_animation");
		}
		function anthem2_hide(){
			let search_anthem2 = document.getElementById("search_anthem2");
			let edit_info_ani5 = document.getElementById("edit_info");
			search_anthem2.classList.remove("left_divs_show");
			edit_info_ani5.classList.remove("number_animation");
		}
		document.getElementById("show_search_anthem").addEventListener("click", anthem2_show);
		document.getElementById("remove_search_anthem").addEventListener("click", anthem2_hide);


// show pricing modal
	function modal_pricing_modal(){
			let pricing_modal = document.getElementById("pricing_modal");
			// let edit_info_ani6 = document.getElementById("edit_info");
			pricing_modal.classList.add("pricing_modalshow");
			// edit_info_ani6.classList.add("number_animation");
		}
		// function anthem2_hide(){
		// 	let search_anthem2 = document.getElementById("search_anthem2");
		// 	let edit_info_ani5 = document.getElementById("edit_info");
		// 	search_anthem2.classList.remove("left_divs_show");
		// 	edit_info_ani5.classList.remove("number_animation");
		// }
		document.getElementById("show_pricin_modal").addEventListener("click", modal_pricing_modal);
		// document.getElementById("remove_search_anthem").addEventListener("click", anthem2_hide);

		// show my hugrgang plus
	function myhugegangplus_show(){
			let pricing_modal2 = document.getElementById("my_hugegang_plus");
			pricing_modal2.classList.add("myhgegang_plusaddclass");
		}
		function myhugegangplus_hide(){
			let pricing_modal2 = document.getElementById("my_hugegang_plus");
			pricing_modal2.classList.remove("myhgegang_plusaddclass");
		}
		document.getElementById("show_hugegang_plus").addEventListener("click", myhugegangplus_show);
		document.getElementById("remove_hugegang_plus").addEventListener("click", myhugegangplus_hide);



// show inner page

		function innerpage_move_show(){
			let pricing_modal2 = document.getElementById("inner_animation_div");
			pricing_modal2.classList.add("inner_animation_divaddclass");
		}
		// function innerpage_move_hide(){
		// 	let pricing_modal2 = document.getElementById("my_hugegang_plus");
		// 	pricing_modal2.classList.remove("myhgegang_plusaddclass");
		// }
		document.getElementById("show_inner_page").addEventListener("click", innerpage_move_show);
		// document.getElementById("remove_hugegang_plus").addEventListener("click", myhugegangplus_hide);



		// show chating content
		function chatingcntnt_show(){
			let chating_modal = document.getElementById("chating_cntnt");
			chating_modal.classList.add("chating_cntnt_addclass");
			
		}
		function chatingcntnt_hide(){
			let chating_modal = document.getElementById("chating_cntnt");
			chating_modal.classList.remove("chating_cntnt_addclass");
		}
		document.getElementById("show_chating2").addEventListener("click", chatingcntnt_show);
		document.getElementById("remove_chating_cntnt").addEventListener("click", chatingcntnt_hide);