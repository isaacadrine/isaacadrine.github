
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <title>regist_thanks</title>
   <link rel="stylesheet" type="text/css" href="_includes/css/main2.css">
   <link rel="stylesheet" type="text/css" href="">
<!---animationn_attempt.js--->
   <script type="text/javascript">
      
   </script>
</head>
<!--In-line block styling-->
   <style type="text/css">
      fieldset{background:black;}
      body {background: black;margin-left: 400px; margin-right: 300px;}
      div.container {position: relative;width: 500px;height: 300px;background: #903C56;}
      div.absolute {position: absolute;bottom: 10px;right: 10px;width: 200px;height: 200px;background: black;}
      h2,h1{font-weight: bold;color: yellow;font-family: algerian;}
      p {color: white;}
      h3 {color: green;}
      ul{color: hotpink;}
      label{color: green;font-weight: bold;}
      legend {color: hotpink;font-weight: bold;}
      input{border-radius: 40px;} 
      marquee{background: grey;border-radius: 40%;}
      h1{color:indigo ;text-shadow: 2px 2px 4px;font-family: algerian;font-weight: bold;font-style: italic;}
      h3{color: blue;}
      h4{margin-left: 20px;margin-right: 20px;}
   </style>
<!--End-->

<form class="rt">
<body>
   <fieldset class="">
   <!--Header Element- and Navigation-->
      <header>
         <!-- Adding a marquee -->
         <marquee >
            <h1></h1>
         </marquee>
<!----Main Content----->
   <div class="class">
      <p><a id="top"></a>
   <header class="2">
      <p>||Mukiibi Isaac</p>
<!--print jobs-->
   <form>
      <input type="button" value="Print" onclick="window.print()"/>
   </form>
<!---applying Date-->
   <section>
      <p style="float: right;">Current Date and Time:
         <span id="txt"></span>
         <script>
            var today = new Date();
            document.getElementById('txt').innerHTML= today;
         </script></p>
   </section>
<!--end--->
      <fieldset style="height: 150px;">
      <h1 style="font-size: 50px;color: yellow;text-align: center;">SKYSCRIP HOTEL</h1>
      <p>The Best Meal Ever!!</p>
   </header>
      <!--Navigation Block-->
         <nav>
            
            <div class="dd">
              <button class="dd-btn">Hover</button>
	      	<div class="dd-content">		
	         	<a href="">menu</a>
	         	<a href="">branch</a>
	         	<a href="">booking</a>
	         	<a href="">employee</a>
	         	<a href="#">details</a>			  
	      	</div>
         </nav>
      <!--main content-->

         <section>
         	<p>
					Heloo, it's really ablessing for you to get to visit our brand new website coz, you are yet to know what no man on this earth has known, what He has seen and what He has eaten!!	
			<br>Simply click <a href="login.php">here and login </a></p>
         <!---beginning code for the Form--->
      <!--end------>
            </form>
                 	<ul>
                  	<li>Feel free to fill in the Details</li>
                  	<li>Hope to hear from you soon..</li>
               	</ul>
              </fieldset>
      <!--End of the fieldset--->
            </p>
         </section>
      <!-- The Image section -->
         <aside>
         </aside>
     <!-- absolute Content -->
       <section>
            <div class="absolute">
               <h2>TIPS Of the Day</h2>
               <p>
                 There is nothing that can ever control what you want to be except you!! Every time make decisions of what you wanna be by yourself..
                        <p><img src="_includes/images/images-4.jpeg" alt="view out the
window of the rolling Tuscan hills" style="height:80px;width: 200px;"></p>
               </p>
            </div>
         </section>
      <!-- End of the second section -->
      </main>
   <!--Footer Content---->
   <footer class="jumbotron text-center row" style="pading-bottom:1px; padding-top:8px;">
        <?php include('_includes/_pages/footer.php'); ?>
   </footer>
   </fieldset>
   
</body>
</form>
</html>







