<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Anoa Interactive</title>

<!-- Bootstrap -->
<!-- jQuery library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="intlInputPhone.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="intlInputPhone.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script>
	// Smooth Scroll on clicking nav items
$('nav a').click(function () {
  var $href = $(this).attr('href');
  $('body').stop().animate({
    scrollTop: $($href).offset().top
  }, 1000);
  return false;
});

// back to top
$('#toTop a').click(function () {
  $('body').animate({
    scrollTop: 0
  }, 1000);
  return false;
});

// Parallaxing + add class active on scroll
$(document).scroll(function () {
  
  // parallaxing
  var $movebg = $(window).scrollTop() * -0.3;
  $('.portion').css('background-positionY', ($movebg) + 'px');

  // add class active to nav a on scroll
  var scrollPos = $(document).scrollTop() + 100;
  $('nav a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('nav a').removeClass("active");
      currLink.addClass("active");
    }
  });
  
  // changing padding of nav a on scroll
    if (scrollPos > 250) {
      $('nav a').addClass('small');
      $('nav img').addClass('move');
      $('nav span').removeClass('movetext');
    } else {
      $('nav a').removeClass('small');
      $('nav img').removeClass('move');
      $('nav span').addClass('movetext');
    }
  
});
</script>
 <style>
  
  </style>
<body class="bg-light">
<!-- .navbar -->
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img class="img-fluid" src="asset/img/Anoa_RGB _2_.png" alt="Logo" style="width: 15%; padding: 0; margin: 0;" ></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse  justify-content-between" id="collapsibleNavbar" >
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <ul class="navbar-nav">
               <li class="nav-item">
        <a class="nav-link" href="https://anoainteractive.co.id/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#	"></a>
      </li>
            </ul>
  </div> 

  </nav>
<!-- /.navbar -->
<div class="row text-left jumbotron bg-light" id="portofolio">
  <div class="col-lg-12 page-header"   style="padding-top: 5%; padding :10% 15%; ">
      <h1><strong>Privacy And Policy</strong></h1>
      <h3>ANOA INTERACTIVE PRIVACY AND POLICY</h3>
	  <br><br>
   				<strong>Anoa interactive is committed to protecting your privacy.</strong><br>
   	      Last updated: Oct 15 2022 <br>
  <br><p>
   	      The purpose of this Privacy Statement is to inform you about our information privacy practices and your privacy rights. Because the success of our website(s) and Games (as that term is defined in Section 11 below) is dependent on building and maintaining goodwill with our users, we are committed to implementing measures designed to protect the privacy of those using the websites and Games. This Privacy Statement describes the types of information we collect; how we collect, use, and share the information; your choices related to our information practices; and how we protect your information. By utilizing our Services, you signify your agreement to this Privacy Statement, our Terms, and other Anoa Interactive rules, policies, notices, agreements and guidelines as may be made available to you from time to time.
	  </p>
  <br><p>
   	      Some terms used herein are defined in the last paragraph of the Privacy Statement. Please refer below for definitions. This Privacy Statement is governed by and incorporated by reference into the Terms (as that term is defined below) available at http://anoainteractive.co.id/ and should be interpreted consistent therewith.
   	      You may be able to access third party services (including through links, advertisements, or other means), including social networks, such as Twitter, Facebook, and Google+, from our Games. When doing so, please understand that those third parties have their own set of information practices. We strongly recommend that you read their privacy policies and terms and conditions of use to understand how they collect, use, and share information. We are not responsible for the privacy practices or the content on the websites of third parties.</p>
  <br><p>
   	      By agreeing to the Terms, you consent to the collection of information for the purposes defined in this Statement, without prejudice to your right to refuse afterward such a use.<br>   	      
   	   
<p><strong>1. TYPES OF INFORMATION WE COLLECT</strong></p>

<p>We require certain information from you in order to provide the Services to you.</p>
<p><strong>Personal Information</strong>.&nbsp;When you use our Services, we may collect and store personally identifiable information that you have directly provided on a voluntary basis. Personally identifiable information (“Personal Information”) is any information relating to an identified or identifiable natural person. An identifiable person is one who can be identified, directly or indirectly, by reference to an identification number or to one or more factors specific to his/her physical, physiological, mental, economic, cultural or social identity. For example, when you register with us, we may collect certain information from you, including your name, email address, username, nicknames and passwords, and social networking usernames and information. Once registered, you may also have the option of completing a user profile. Your user profile may include Personal and non-Personal Information, depending on how you complete the profile. We do not require Personal Information from you in order to access our Sites or some aspects of our Services. However, you will not be able to utilize certain features of our Services unless you create a profile and share with us some Personal Information. For example, you will not be able to play some of our Games, receive materials such as newsletters, or make purchases without a profile being created.</p>
<p> We understand the importance of our users’ personal information, and more importantly the information pertaining to children under 13 years of age. We do not collect or require users to enter their personal information when using our Products. We do not collect any personal information from children with our Products. </p>
<p><strong>Non-Personal Information</strong>: When you use the Service, we may collect information that will not be able to specifically identify you, such as demographic information (for example, gender or age) and information about your interests and preferences. In many cases, such demographic and preferences information are optional. In other cases, such as online surveys, we collect this information on an anonymous basis. We may group any such information into aggregate user data in order to describe the use of the Services to our existing or potential business partners, sponsors, advertisers or other third parties, or in response to a government request. We may also group demographic and preferences information and responses to surveys that we collect from visitors into aggregate data for the same purposes. However, please be assured that this aggregate data will in no way personally identify you or any other visitors to the Site. Should we link any demographic or preferences information to any Personal Information, then such demographic information and preferences information will be treated as Personal Information under this Privacy Statement.</p>
<p><strong>Technical and Usage Information</strong>.&nbsp;To enable your use of our Services, we collect technical and usage information such as your IP address, your browser type, browser language, referring and exit URLs (including, without limitation, your access to third party sites (including through links, advertisements, or other means), including social networks such as Twitter, Facebook, and Google+), interactions with other users, usage statistics with the Services, and device identification information regarding the computers, the servers or other devices with which you use our Services.</p>

<p><strong> 2.COPPA </strong></p>

<p>We comply with the Children’s Online Privacy Protection Act. We do not knowingly collect personal information on children under the age of 13. When a user identifies himself or herself as a child under the age of 13 through a support request or through any feedback, we will not collect, store or use, and will delete in a secure manner, any personal information of such user. </p>

<p><strong>3. WHO IS COLLECTING INFORMATION</strong></p>

Information subject to this Statement is collected by Anoa Interactive, a corporation formed under the laws of Indonesia, with offices located in Medan, Indonesia. When you are asked for Personal Information while using the Service, you are sharing that Personal Information with Anoa Interactive and its affiliates, unless specifically stated otherwise.&nbsp;Please be aware that Anoa Interactive and some of the other mentioned companies are located in Indonesia.
In addition, some Services are provided in conjunction with third party companies, and thus your Personal Information may be collected by a company that is not a part of or related to Anoa Interactive. This collection may occur by itself or occur simultaneously with Anoa Interactive’s collection of the same information. However, in such instance, you will be notified at the time the Personal Information is collected. If you do not want your Personal Information to be shared, you can choose not to allow the transfer of Personal Information by not using that particular Service or by not providing any Personal Information at that time.
<p></p>

<p><strong> 4. WHEN AND HOW WE COLLECT INFORMATION ABOUT YOU</strong></p>

<p>We may collect information about you and your use of the Services in a number of ways:</p>
<p><strong>When Provided Directly from You</strong>.&nbsp;As mentioned above, we collect information about you directly from you in certain circumstances, including when you register for an account, you submit gameplay preferences, or you communicate directly with us through e-mail, web submission or other communication channels.</p>
<strong>When You Communicate with or Share with Other Users</strong>.&nbsp;You may also participate in certain activities on our Services that give you the opportunity to voluntarily communicate or share information with other Anoa Interactive users, such as posting messages on a message board, in-game situations, posting public comments to user profiles or games, sending private messages, sending invitations, and posting photos. We may occasionally monitor, record, store and process these communications and interactions in order to protect your safety or the safety of other users, to assist with regulatory or law enforcement efforts, or to protect and defend Anoa Interactive’s rights and property.</p>
<p><strong>To Ensure Compliance with the Terms</strong>.&nbsp;In order to maintain the integrity of the Service and to ensure compliance with the Terms, we reserve the right to use automated tools to scan and obtain information from your computer, software, and parts or portions thereof, including, but not limited to, your computer’s random access memory, video card, central processing unit, hard drive(s) and any other storage devices in order to assist our efforts in policing users who may implement programs and/or scripts used to develop and/or use “hacks” and/or “cheats” to gain advantage over other users. Such programs or scripts include, but are not limited to, packet editors, cheat engines and WinSocket providers. In addition to such programs or scripts, we may record gameplay, chat posts or other interactions you have with the Service as part of our provision of the Service or if we suspect that you are violating the Terms. Such recordings will be used to determine if you have in fact violated the Terms. The right to monitor and record your interactions with the Service to ensure compliance with the Terms is in addition to the other rights to monitor and record as provided for in this Statement.

<p><strong>Through Cookies and Similar Technological Means</strong>.&nbsp;When you use our Services, Anoa Interactive may collect information about your use and interaction with those Services. The bulk of this information is collected and stored through the use of technological means like cookies, log files, and analytical measurements and tools.</p>
<ul>
<li>Cookies are small files containing limited amounts of information that are automatically generated by a website, game, or other interactive service and are stored on your hard drive or device. Cookies are not stored in our Games. Cookies may help you navigate the Services as easily as possible, may allow you to customize your user experience, or provide other means of enhancing our Services. We collect information using cookies in order to analyze the usage of our Games, for authentication purposes, and to improve and personalize the Services we provide to you. Cookies may be delivered to your device as part of your access to and use of our Games. You may have the option to reject cookies, depending on a variety of factors such as your device and device preferences, though you should be aware that rejecting cookies may impair certain functionalities offered from within the Service, such as allowing you to complete a purchase. You may occasionally get cookies from our advertisers or other third parties with links on the Site. We do not control these cookies. The use of advertising cookies sent by third party ad servers is a common practice for online service providers. For more information on how to do manage cookies on your device, please refer to the documentation accompanying your web browser software.</li>
<li>Log files are small files that typically contain IP addresses. An IP address is a numeric address that may be assigned to your computer by your Internet Service Provider. In general, we use log files to deliver the content within the Services to you, to monitor traffic on Service, to troubleshoot technical problems and authenticate users’ entitlements to our products. In the event of user abuse of our Services, however, we may block certain IP addresses or game system IDs provided by our licensed hardware manufacturers. If available, IP addresses and game system IDs may be used in order to enforce our Terms of Service.</li>
<li>Analytic metrics tools, whether created by Anoa Interactive&nbsp; or by third parties, may be employed to collect information when you use our Services. These tools may use cookies, log files, or other means such as web beacons and tracking pixels to collect and analyze certain types of information, including general geographic location, browser type, browser language, information passed from your browser (if any), referring and exit pages, URLs, platform type, click information, information about your device, peripheral hardware, Service-related software installed on your machine and/or device, domain names and types, landing pages, Service-related pages viewed and the order of those pages, advertising conversion rates, the date and amount of time spent on particular pages, other Internet and Service usage information, game state and the date and time of activity on our Services, information about how a particular Game is used, including game metrics and statistics, feature usage and purchase history, as well as unique hardware identifiers such as MAC Address and other similar information.</li>
</ul>
<p> We may use some or all of the following types of cookies (and similar technologies)</p>
<table class = "table">
<tbody>
<tr>
<td width="">Cookie Function:</td>
<td>Cookie Purpose:</td>
</tr>
<tr>
<td width="100px">Analytics and<br>
Research</td>
<td>We may use analytics- and research-oriented cookies to collect information about how visitors use our Services. We may use the information to compile reports and to help make improvements to the Services. Analytics- and research-oriented cookies collect information in an anonymous form, including the number of users of our Services, where users have come from, why types of computer systems they use, etc.</td>
</tr>
<td width="100px">Advertisement<br>
Research</td>
<td>Our apps use advertisements that are served by Admob and Unity ads. They may collect information such as user interests and demographics, to serve ads that are better targeted to the user (personalized advertising).</td>
</tr>
<tr>
<td width="100px">Authentication</td>
<td>These cookies help us to identify our users so that when you’re logged in, you can enjoy Anoa Interactive’s Services and their features to the fullest extent.</td>
</tr>
<tr>
<td width="100px">Service Features<br>
and Performance</td>
<td>We may use feature-tracking cookies to collect information about how our Services are performing. We may use the information to compile reports and to help make improvements to the Services.</td>
</tr>
<tr>
<td width="100px">Security and<br>
Service Integrity</td>
<td>We may use security-based cookies to heighten the security offerings of our Services. We may use information obtained from security and service integrity cookies to, among other things, enforce our Terms of Service and to protect the safety of our users.</td>
</tr>
</tbody>
</table>
<p>You may block these cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies. However, if you use your browser settings to block all cookies (including essential cookies) you may not be able to access all or parts of our Sites or play our Games.</p>
<p>Generally, information collected through these technological means will not be Personal Information, though it is possible that in some circumstances Personal Information may be collected through such technological means. For example, a functionality may be offered to you to “remember” your account name, and will “remember” the account name through the use of cookies. Such offerings will be employed by Anoa Interactive to collect and utilize your Personal Information only with your express consent.<br>
However, certain third-party tools may allow the companies offering those tools to collect information on our Services for their own purposes. In the event that you authorize such third parties to collect information about you for their own purposes, any information you share with that third party – Personal Information or otherwise – is not subject to this Privacy Statement and is not under the control of Anoa Interactive.</p>
<p><strong>BY AGREEING TO THE TERMS, YOU CONSENT TO THE USE OF COOKIES AND OTHER TECHNOLOGICAL MEANS AS IDENTIFIED IN THIS STATEMENT WITHOUT PREJUDICE TO YOUR RIGHT TO REFUSE AFTERWARDS SUCH A USE.</strong></p>

<p><strong>5. HOW WE USE THE INFORMATION WE COLLECT</strong></p>

<p>To Provide the Services:&nbsp;We may use the Personal Information, Non-Personal Information and Technical and Usage Information we collect in the following ways:</p>
<ul>
<li>To create your account, which allows you to utilize our Services and communicate with other users;</li>
<li>To provide you the proper functioning of the Service, which may require the sharing of information with third party(ies) consistent with the provisions of this Statement;</li>
<li>To provide you with a customized or personalized experience;</li>
<li>To provide you with technical support or to respond to your questions or comments;</li>
<li>To comply with our legal or regulatory obligations;</li>
<li>To provide you with relevant and targeted or direct advertising from Anoa Interactive or third parties; and</li>
<li>To send you e-mails with useful updates or promotions about our Games and other products and services.</li>
</ul>
<p><strong>BY AGREEING TO THE TERMS, YOU CONSENT TO THIS USE OF YOUR PERSONAL INFORMATION. YOU MAY REVOKE YOUR CONSENT AT ANY GIVEN TIME, THOUGH DOING SO MAY IMPAIR THE PROPER FUNCTIONING OF THE SERVICES.</strong></p>
<p><strong>To Protect the Integrity of the Services</strong>:&nbsp;As noted above, we may collect and store information to ensure compliance with the Terms. In addition, we may collect Personal Information and Non-Personal Information about you and your actions if we suspect that your actions on Service, including communications on forums, Service-enabled communications or images of in-game situations, could violate or infringe upon the Terms, endanger the integrity and/or the security of the Services, put at risk your safety or the safety of other users, or would otherwise be illegal. We may combine this information with any other information about you for these purposes.</p>
<p><strong>BY AGREEING TO THE TERMS, YOU CONSENT TO THE RECORDING, STORAGE, AND DISCLOSURE OF SUCH COMMUNICATIONS YOU SEND OR RECEIVE FOR THESE PURPOSES.</strong></p>
<p><strong>To Evaluate and/or Improve Upon the Services</strong>:&nbsp;We use Non-Personal Information and Technical and Usage Information to build higher quality, more useful Services by performing statistical analyses of the collective characteristics and behavior of our users, and by measuring demographics and interests regarding specific areas of the Services. We also may use Non-Personal Information and Technical and Usage Information for security or debug purposes, technical support and protect against user abuse. We may group this information into aggregate visitor data in order to describe the use of the Services to our existing or potential business partners, sponsors, advertisers or other third parties, or in response to a government request. We may also group demographic and preferences information and responses to surveys that we collect from visitors into aggregate data for the same purposes. However, please be assured that this aggregate data will in no way personally identify you or any other user of the Service.</p>

<strong>To Address, Prevent or Limit Illegal Activities</strong>:&nbsp;We reserve the right to use and/or release any or all information contained within our databases, access logs or other records concerning you if you violate the Terms, policies, notices, agreements or guidelines, or intentionally or unintentionally partake (or are reasonably suspected of partaking) in any illegal activity, including, but not limited to, hacking, even without a subpoena, warrant or other court order, and to release such information in response to court and governmental orders, civil subpoenas, discovery requests and as otherwise required by law, and/or to initiate our own legal proceedings. We cooperate with law enforcement agencies in identifying those who may be using the Service (or any part thereof) for illegal activities. We also reserve the right to report any suspicious or suspected illegal activity to law enforcement individuals or entities for investigation or prosecution.</p>

<p><strong>6. SHARING OF YOUR INFORMATION</strong></p>

<p>It is our policy not to share your Personal Information with third parties unaffiliated with Anoa Interactive for their own use except in the following circumstances:</p>
<ul>
<li><strong>With Your Consent</strong>.&nbsp;From time to time we may ask for your consent to share Personal Information with third parties. For example, from time to time we may make on behalf of third parties special offers to our users. If you decide to respond to the offer, you would be sharing information with that third party and may be sharing information with Anoa Interactive simultaneously. When we ask for your consent, it is your choice whether to grant it or not, though certain features, offers or functionalities of the Service may be impaired depending on your choice. If you choose to not give your consent, we will not share your Personal Information with the third party at issue (unless another circumstance applies).</li>
<li><strong>Third Party Service Providers</strong>.&nbsp;We may use third-party service providers, such as payment gateway companies, platform service companies, and analytics companies, to help us provide or improve the Games we offer you. We may share your Personal Information with these third party service providers so that they may provide their services to us. In addition, some third party service providers may require the transmission and/or storage of information about you and your activities on services and devices not controlled by Anoa Interactive (including Personal Information about you). For example, use of Google Analytics, a web analytics service offered by Google Inc. requires that certain information about your activities be transmitted to and stored on Google servers based in the US. Google will use this information in order to evaluate your use of our Services, to make reports on Service activities and/or to other such services as Anoa Interactive may request. Google may also match up this information with other data of Google depending upon your current device and privacy settings. The same applies to other analytics companies and similar service providers as may be engaged by Anoa Interactive from time to time. As Anoa Interactive does not control your device’s privacy settings or the privacy settings of third-party tools and technologies that function alongside the Service, Anoa Interactive encourages you to review your device’s privacy settings as well as your privacy settings of third-party tools such as those offered by online advertising networks and other service providers.</li>
<li><strong>Other Anoa Interactive Users</strong>.&nbsp;Some of your Personal Information (including information in your profile such as your name, nickname(s), and country) may be visible to other Anoa Interactive users as a normal part of the Service. Other Anoa Interactive users (both those who are your social networking friends and those who are not your social networking friends) may be able to view information about your uses and interactions, such as your game results, scores, and profile information.</li>
<li><strong>Legal Purposes</strong>.&nbsp;We may provide your Personal Information to third parties where we have a good faith belief that doing so is required by law or to cooperate with regulators or law enforcement authorities. We may also provide your Personal Information to third parties in order to protect the rights or property of a third party or Anoa Interactive, including enforcing our Terms.</li>
<li><strong>Health or Safety</strong>.&nbsp;We may share your Personal Information when we have a good faith belief that there is an emergency that poses a threat to the health or safety of you, another person, or the public generally.</li>
<li><strong>Sale or Merger</strong>.&nbsp;If Anoa Interactive is involved in a major business transition, such as a merger, acquisition by another company, or sale of its assets, we may transfer your Personal Information to the successor organization in such transition. If material changes to Anoa Interactive’s privacy practices will occur as a result of the business transition, we will amend the Privacy Statement in accordance with Section 9 below.</li>
<li><strong>Game Events</strong>.&nbsp;For some game-related events, we may share information, including your profile and nicknames, with third parties or the general public. For example, a Game-related tournament may include a description of the players, an overview of the Games played, etc.</li>
<li><strong>Licensors, Licensees, Developers,&nbsp;</strong>and<strong>&nbsp;Co-Publishers</strong>.&nbsp;We may share your Personal Information with our business partners such as our licensors, licensees, developers, and co-publishers, during and upon termination of the contracted service in case the license agreement with the partner licensors and developers requires as such. These partner entities may be located outside the territories of the EU/EEA, and more including in Korea and in the U.S., which may not provide the same adequate protection for personal data as the EU. Anoa Interactive seeks partners that in principle respect the U.S.-EU Safe Harbor Framework as set forth by the U.S. Department of Commerce regarding the collection, use, and retention of data from the EEA. However, unless specifically stated in this Privacy Statement or on our website(s), Anoa Interactive makes no representation or promise that any party, including Anoa Interactive, will fully comply with or be a member of the U.S.-EU Safe Harbor Framework. To learn more about the Safe Harbor program, please visit http://www.export.gov/safeharbor.</li>
</ul>
<p>With respect to your Non-Personal Information and Technical and Usage Information, we may share such information with third parties for various purposes, including for the purpose of explaining our user demographics or improving the quality or delivery of our services and the marketing materials available through the Games. We may use third-party advertisers and advertising networks to deliver advertising within the Services. We may share your Non-Personal Information, including your operating system, country location, and Games usage information with these third party advertisers for the purposes of delivering these advertisements. Moreover, these third parties may utilize technological means to deliver the advertisement, including the use of their own cookies, just as if you had requested a web page from the Site. If an advertiser on a third party advertising network asks us to show an advertisement to a certain audience and you respond to that advertisement, the advertiser or advertising network may conclude that you fit the description of the audience they are trying to reach. If you want to prevent a third party advertising network from sending and reading cookies on your computer, you must visit each third party advertising network’s website individually and opt out (if they offer this capability).</p>
<p>Finally, some features may allow you to share information about you and your use of the Service with others. For example, the Service may allow you to link your Service account with third party social networking sites. When doing so, please understand that you are sharing information directly with third parties, not with Anoa Interactive, and that those third parties have their own set of information practices. When you engage in such sharing, you may be allowing others to view the content you Post, your name, and more. We are not responsible for the privacy practices or the content on the websites of third parties, nor for any sharing of your information (Personal Information or otherwise) with any third party. We recommend careful consideration before you Post anything to such media, and we strongly recommend that you read their privacy policies and terms and conditions of use to understand how they collect, use, and share information.</p>

<p><strong>7. YOUR CHOICES</strong></p>

<p>Opt Out.&nbsp;You may at any time “opt out” of receiving marketing materials described in this Privacy Statement from us and/or our affiliates and advertisers working on our behalf. The marketing materials that we send you (e.g., e-mails) will indicate that such materials are from us and will always provide you with a method of “opting out” of receiving future materials of a similar nature. To “opt out,” you may utilize the opt-out functionality included in our e-mails, you may change your communication preferences within the Anoa Interactive Launcher (as may be applicable to communications on that platform) and you may contact our customer support department by logging into the customer support portal and submitting a ticket, or you may edit your account information on our Service accordingly. Keep in mind that, while Anoa Interactive takes reasonable steps to require our advertisers and business partners to adhere to our policies regarding the privacy of our users and otherwise to handle your Personal Information in a responsible manner, we cannot and do not assume any responsibility for any actions or omissions of third parties regarding their use of information they receive independently of us.</p>
<p>Notwithstanding any request to opt out, Anoa Interactive may continue to use your Personal Information to contact you with information that is important to our offering of the Service (e.g., a notice of an update to this Privacy Statement) and administrative or billing-related issues. In addition, we may not delete Non-Personal Information or Technical or Usage Information in response to an “opt-out” or deletion request. Anoa Interactive reserves the right to retain and use this information consistent with this Privacy Statement even after a request to delete your Personal Information is received provided that the information being retained is not Personal Information. If you wish to never be contacted by Anoa Interactive again, please submit a ticket to our Customer Support department, asking them to delete your account. This action is permanent, so please request this only if you are absolutely sure this is what you want.</p>
<p>
<strong>Correct or Delete Personal Information</strong>.&nbsp;You may also request that we correct or delete Personal Information about you. To do so, please submit a ticket to our&nbsp;Customer Support department. Please make sure that your request to correct or delete Personal Information is clear and includes all Personal Information you want to have corrected or deleted. If you wish to have all Personal Information about you deleted, you may simply ask for a complete and permanent deletion. For your security, we reserve the right to contact you to confirm and verify your request to correct or delete Personal Information, including the right to request additional information to confirm your identity and that you have the right to correct or delete Personal Information tied to a particular account. If we request additional information and it is not provided to us, we will not act on the request to correct or delete Personal Information. If we seek and obtain such confirmation or verification, we will respond to your request promptly. We may retain a copy of your Personal Information for a limited (but reasonable) period of time after processing your request in case you decide to begin using the Service again.<br>
Please note that your request to delete certain Personal Information may restrict or prohibit your use of the Games and/or the Service, while the deletion of all of your Personal Data will lead to the termination of your account and your ability to use the Services. Also, in some cases, we may not be able to delete your Personal Information and will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. 
<br><strong>Request for Access to Personal Information</strong>.&nbsp;Where allowed by law, you may request access to your Personal Information. To do so, please submit a ticket to our&nbsp;Customer Support department. We will process that request in line with any local laws and our policies and procedures in place for dealing with such requests.<br>
There may be circumstances where we are unable to provide access to your Personal Information. We may deny, or restrict access for legally permissible reasons, such as situations where the information contains references to other individuals and is not reasonably severable, or where it cannot be disclosed for legal, security, or commercial proprietary reasons. We will advise you of any reason for denying or restricting an access request.<strong>Information Shared with Third Parties</strong>.&nbsp;Any information shared with a third party, whether through the Service or not, is subject to the control of that third party, and therefore a request made to Anoa Interactive to “opt out” or to correct or delete Personal Information will not have any impact on the third party’s use or storage of that information.</p>
	
	<p><strong>8. SECURITY OF YOUR INFORMATIONAL</strong></p>
	
	<p>though we do not represent that we follow any particular, independent code of best practices, we maintain reasonable physical, electronic, and procedural safeguards to protect your information. For example, we protect some of your Personal Information by using a firewall and Secure Socket Layer (SSL) encryption.While we take reasonable precautions against possible security threats, there is no such thing as “perfect security” on the Internet, so we cannot guarantee that unauthorized access, hacking, data loss, or other breaches will never occur. We strongly recommend that you take steps to maximize the security of your Personal Information, such as not sharing your login information and logging out of your account after you are done using our Service.<strong>We may transfer, store and process your Personal Information in the US as well as in other territories. It may be processed by staff operating in these countries who work for us or for one of our affiliated entities, vendors or suppliers. Such staff maybe engaged in, among other things, the&nbsp;</strong>fulfillment<strong>&nbsp;of an order, the processing of your payment details for NX currency and the provision of support services. By submitting your Personal Information, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure that your Personal Information is treated securely and in accordance with this Privacy Statement.</strong>All users should be aware that, when they disclose Personal Information to others through or using the Service, the information being shared may be made publicly available and may be collected and used by others outside of the control of Anoa Interactive. When you disclose about you to others, you do so at your own risk and we are not responsible for protecting the information that you choose to communicate to other users on the Service, or for the actions of other users.</p>
	
	<p><strong>9. CHANGES TO OUR PRIVACY STATEMENT</strong></p>
	
	<p>From time to time, we may make changes to this Privacy Statement. If we amend this Privacy Statement, we will notify you and other users by either posting the notice on the Site with a revised version, e-mailing it to the address which you have provided while registering to the Services and/or through other means of communication enabled through the Service. Any changes to this Privacy Statement will take effect after a reasonable time span as set forth in the notice of such change. If you do not consent to the changes, do not use the Services. Your continued use of the Service after such notice and an appropriate time span as set forth in the notice will be deemed acceptance of such changes. We recommend that you return to the Site and/or Service periodically to ensure familiarity with the most current version of this Privacy Statement.</p>
	
	<p><strong>10. CONTACT US</strong></p>
<p>Anoa Interactive<br>
	Medan, Sumatra Utara<br>
Indonesia<br>
Email: anoainteractive@gmail.com</p>

<p><strong>11. DEFINITIONS</strong></p>
<p>“Game(s)” means the interactive software entertainment products and services made available to end users by Anoa Interactive.</p>
<p>“Include,” “Includes,” and “Including,” whether capitalized or not, means including without limitation.</p>
“Post” means to upload, post, create, make available, send, share, communicate or transmit.</p>
<p>“Service” or “Services” means the functionalities, gameplay, technologies, and other aspects of our Site, our Games, and all Site- and Game-related products and services.</p>
<p>“Site” or “Website” means www.Anoa Interactive.com and other such URLs as may be controlled by Anoa Interactive.</p>
<p>“Terms” mean the terms and conditions applicable to the Services, made available to you through the Services and at www.anoaInteractive.co.id. The definition of Terms includes this Privacy Statement, the End User License Agreement applicable to our Services, the Anoa Interactive Terms of Service, and any other agreement or policy that is posted to our Site or incorporated into our Services.</p>
<p>© 2022 Anoa Interactive – All Rights Reserved.</p>

     
    </div>
  
  </div>
<!-- HEADER -->
	
	
</body>


</html>