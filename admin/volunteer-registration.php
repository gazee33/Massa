<?php
include('config.php');
?>

<?php
if(isset($_POST['BtnAdd'])){
$query='insert into volunteers 
(VolunteerName ,Gender,BirthDate ,MaritalStatus ,NationalityID ,Address ,phone ,email ,QualificationID ,assessment ,specialization ,Job, phonelogin, passwordlogin) values
	("'.$_POST['VolunteerName'].'","'.$_POST['Gender'].'","'.$_POST['BirthDate'].'","'.$_POST['MaritalStatus'].'",'.$_POST['NationalityID'].',"'.$_POST['Address'].'","'.$_POST['phone'].'","'.$_POST['email'].'",'.$_POST['QualificationID'].',"'.$_POST['assessment'].'","'.$_POST['specialization'].'","'.$_POST['Job'].'",'.$_POST['phonelogin'].',"'.$_POST['passwordlogin'].'")';

$result=mysqli_query($db,$query) or die(mysqli_error($db));
$msg='<h3>لقد تمت عملية الاضافة بنجاح</h3>';
echo "<meta http-equiv='refresh' content='2'x>";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<!--
	ucorpora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	https://www.freshdesignweb.com/ucorpora/
-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>المتطوعين</title>
	<meta name="description" content="ucorpora about us - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora about, theme, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="../img/favicon.ico" rel="icon" type="image/png">

  <!-- Styles -->
  <link href="../css/styles.css" rel="stylesheet">
  <link href="../css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="../css/font-awesome/font-awesome.css" rel="stylesheet">
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen">

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   

</head>       
<body>
  <!-- Header -->
  <header id="header">
    <div class="container">
      <div class="row">

        <!-- Logo -->
        <div class="span3">
          <div class="logo">
            <a href="../index.htm"><img src="../img/logo-header.png" alt=""></a>
          </div>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul class="clearfix">
				<!--  class="active"  -->
	            <li> <a href="../index.htm"><i class="icon-home"></i> الرئيسية </a></li>

			   <li> <a href="../about-us.htm"><i class="icon-book"></i> من نحن </a>
                   <ul> <!-- Submenu -->
                      <li><a href="../about-us.htm">نبذة تاريخية</a></li>
                      <li><a href="../structure.htm">الهيكل التنظيمي </a></li>
					  <li><a href="../administration.htm">الإدارة</a></li>
                      <li><a href="../facts.htm">حقائق</a></li>
					  <li><a href="../volunteering-opportunities.php">فرص التطوع</a></li>  
				  </ul> <!-- End Submenu -->      
               </li>
				
                
				<li><a href="#"><i class="icon-leaf"></i> الأقسام</a>
					<ul> <!-- Submenu -->
                      	<li><a href="../admin-volunteer-dept.htm">قسم إدارة التطوع </a></li>
                      	<li><a href="#">قسم ......</a></li>     
                    </ul> <!-- End Submenu -->      
               </li>
				  
				<li><a href="#"><i class="icon-briefcase"></i> المتطوعين </a>
                     <ul> <!-- Submenu -->
						 <li><a href="../volunteer-registration.php">تسجيل متطوع</a></li>
						 <li><a href="../book-volunteering-opportunity.php">حجز فرصة تطوع </a></li>
						 <li><a href="../volunteers-info.php">معلومات عن المتطوعين </a></li>
					</ul> <!-- End Submenu -->      
               </li>  
			  
			  <li> <a href="../contact.htm"><i class="icon-envelope-alt"></i> اتصل بنا</a></li>
			  
	           </ul>
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
  </div>  
</header><!-- Header End -->

<!-- Titlebar
================================================== -->
<section id="titlebar">
	<!-- Container -->
	<div class="container">      
		<div class="eight columns">
			<h3 class="right">بيانات المتطوعين</h3>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>:</li>
					<li><a href="../index.htm">الرئيسية</a></li> 
				</ul>
			
			</nav>
		</div>

	</div>
	<!-- Container / End -->
</section>

  <!-- Content -->
  <div id="content">
    <div class="container">

       <div class="row">
        <div class="span12">
		 <div class="row space50"></div> 
          <div dir="rtl">
		  <div> <?php echo $msg; ?>
		   <form name="form2" method="post" action="">
			<div>الاسم رباعي   </div>
			<input name="VolunteerName" type="text"> 
           <div>النوع</div>
			<input type="radio" name="Gender" value="ذكر">  ذكر
			<input type="radio" name="Gender" value="انثئ">  انثئ
		   <div> تاريخ الميلاد</div>
			<!-- <input name="BirthDate" type="text" value="yyyy-mm-dd">  <!--  value="dd/mm/yyyy" --> 
			<input type="date" id="BirthDate" name="BirthDate"> 
		   <div> الحالة الاجتماعية</div>
              <select  name="MaritalStatus" id="MaritalStatus" onChange="showCustomer(this.value)">
              <option value="">---&gt; حدد الحالة الاجتماعية &lt;---</option>
                <option value="عازب">عازب</option>
                <option value="متزوج">متزوج</option>
                <option value="مطلق">مطلق</option>
              </select>
	      <div>	الجنسية</div>
			   <?php
			  $query='select * from nationalities';
			  $result=mysqli_query($db,$query) or die(mysqli_error($db));
			  ?>
		<select name="NationalityID" id="NationalityID">
			  <?php
			  while($row=mysqli_fetch_array($result))
			  {
			  echo'<option value='.$row['NationalityID'].'>';
			  echo $row['NationalityName'].'</option>';
			  }
			  ?>
         </select>
			<div>العنوان</div>
			 <input name="Address" type="text"> 
            <div> الهاتف</div>
			 <input name="phone" type="tel">       
			<div>البريد الالكتروني</div>
			 <input name="email" type="email"> 
           <div>المؤهل</div>
			  <?php
			  $query='select * from qualifications';
			  $result=mysqli_query($db,$query) or die(mysqli_error($db));
			  ?>
		<select name="QualificationID" id="QualificationID">
			  <?php
			  while($row=mysqli_fetch_array($result))
			  {
			  echo'<option value='.$row['QualificationID'].'>';
			  echo $row['QualificationName'].'</option>';
			  }
			  ?>
         </select>
		 <div>	التقييم</div>
			 <input name="assessment" type="text"> 
          <div>	التخصص</div>
			 <input name="specialization" type="text">       
			<div> الوظيفة</div>
			 <input name="Job" type="text"> 
            </br>
			
			<fieldset><legend class="blue-dark"><strong>بيانات تسجيل الدخول</strong></legend>
			
			<div>قم بادخال رقم الهاتف بدون صفر مثلاً: 966128337777</div>
			 <input name="phonelogin" type="tel">       
			<div> كلمة المرور</div>
			 <input name="passwordlogin" type="text"> 
			 
			</fieldset>
			
			
			<input class="btn btn-blue" name="BtnAdd" type="submit" value="موافق">		
		    </form>
		  </div> 
		                          
          </div> 
                                   
<!--           <div class="row space50"></div> 
 -->		   
        </div>
      </div>
    </div>
  </div> 
  
  <!-- Content End -->  
   <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>تواصل معنا</h3>
        <div>         
          <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
            <div id="ajaxsuccess">تم ارسال الايميل بنجاح</div> 
            <div class="error" id="err-name"> الرجاء ادخال اسم</div>
            <input name="name" id="name" type="text" value="الاسم" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">
            
            <div class="error" id="err-email">الرجاء ادخال ايميل</div>
		        <div class="error" id="err-emailvld">البريد الالكتروني غير صحيح</div>
            <input  name="email" id="email" type="text" value="البريد الالكتروني" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

            <div class="error" id="err-message">الرجاء كتابة رسالة</div>
            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">رسالة</textarea>
            <br>
            <div>
            	<div class="error" id="err-form">There was a problem validating the form please check!</div>
            	<div class="error" id="err-timedout">The connection to the server timed out!</div>
            	<div class="error" id="err-state"></div>
            </div>
            <button id="send" class="btn f-right">ارسال الرسالة <i class="icon-ok"></i></button>
          </form>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>العنوان</h3>
		  شارع81
		   <br>
         جدة 
		 <br>
          السعودية
		  <br>
          
          <i class="icon-phone"></i> (966) 555-8890<br>
          <i class="icon-envelope"></i><a href="mailto:support@example.com">support@example.com</a><br>
                   
       <!--    <div class="row space40"></div>  

          <a href="#" class="social-network sn2 behance"></a>
          <a href="#" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 pinterest"></a>
          <a href="#" class="social-network sn2 flickr"></a>
          <a href="#" class="social-network sn2 dribbble"></a>
          <a href="#" class="social-network sn2 lastfm"></a>
          <a href="#" class="social-network sn2 forrst"></a>
          <a href="#" class="social-network sn2 xing"></a>      
        </div> -->
      </div>
        
	<div class="verybottom">
		
      <div class="row space15"> </div>
      <div class="row" >
        <div class="span6 left" >
		
          <div class="logo-footer">
		     مأسسة العمل التطوعي
          </div>                       
        </div>
        <div class="span6 right">
         جميع الحقوق محفوظة 2019  &copy;
        </div> 
      </div>
 </div>
    </div> </div> </div>
  </footer>
  <!-- Footer End -->


  <!-- JavaScripts -->
  <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="../js/functions.js"></script>
  <script type="text/javascript" defer src="../js/jquery.flexslider.js"></script>

</body>
</html>
  
