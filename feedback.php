<!DOCTYPE html>
<html>
    <head>
        <title>Feedback form</title>
        <link rel="icon" type="image/x-icon" href="http://localhost:8080/olive-kitchen/logo_olive.jpg">
        <style>
          @import url(https://fonts.googleapis.com/css?family=Oswald:400,700);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
body{
  background: #F0F0F0;
  font-family: Open Sans ,sans-serif;
  line-height:1.5em;
}
#contact {
width: 500px;
margin:2em auto;
background:#cda45e;
position: relative;
margin-top: 200px;
}
#contact::after {
content: "";
display: block;
height: 30px;
width: 90%;
left: 5%;
bottom: 0;
position: absolute;
-webkit-box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.19);
box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.19);
border-radius: 100%;
z-index: -1;
}
#contact article {
  padding: 1em;
}
#contact h1 {
background: #1a1814;
font-family: Oswald ,sans-serif;
font-size: 1.75em;
padding: 0.6em 0 0.6em 0.4em;
color: white;
text-shadow: 0 0.06em 0 #424242;
position: relative;
}
.contactbutton {
background: #1a1814;
-webkit-box-shadow: 1px 1px 0 0 #832032,2px 2px 0 0 #832032,3px 3px 0 0 #832032;
box-shadow: 1px 1px 0 0 #832032,2px 2px 0 0 #832032,3px 3px 0 0 #832032;
text-align: center;
display: block;
width: 100%;
height: 50px;
margin-top: 20px;
margin-bottom: 2px;
cursor: pointer;
}
.contactbutton:hover {
-webkit-box-shadow: 1px 1px 0 0 #832032,0px 0px 0 0 #832032,0px 0px 0 0 #832032;
box-shadow: 1px 1px 0 0 #832032,0px 0px 0 0 #832032,0px 0px 0 0 #832032;
margin-top: 22px;
margin-left: 2px;
margin-bottom: 0px;
}
.mail {
margin-top: 11px;
font-size: 15px;
display: inline-block;
border-top: 2em solid transparent;
border-left: 2.6em solid #832032;
height: 0;
width: 0;
position: relative;
}
.mail:before {
content: '';
top: -2.5em;
left: -2.95em;
display: block;
position: absolute;
border-top: 1.2em solid #832032;
border-left: 1.6em solid transparent;
border-right: 1.6em solid transparent;
border-bottom: 1em solid transparent;
font-size: 0.8em;
}
.mail::after {
display: block;
content: "";
position: absolute;
border-top: 2em solid transparent;
border-right: 2.6em solid #832032;
height: 0;
width: 0;
left: -2.18em;
bottom: 0;
}

.home{
  color:1.2em solid #832032;
  padding:1px;
  margin:auto;
}

@media (max-width: 500px){
#contact {
width: 100%;
}
}
            

            </style>
    </head>
    <body>
      <section id="contact">
        <div class="sectionheader">	<h1>FEEDBACK</h1></div>
        <article>
        <p>Hope you had a wonderful experience in Olive Kitchen. Please give us your valuable feedback.</p>
                 
            <a href="mailto:valarmathi3690@gmail.com?
                 cc=gfg@gmail.com&
                 bcc=geeks@gmail.com
                 &subject=Feedback for Olive Kitchen
                 &body=Add what you want to suggest">
                 <div class="contactbutton"><div class="mail"></div></div>
          </a>
        <a href="../olive-kitchen/restaurant.php" class="home">Redirect to homepage</a>
        </article>
      </section>
</body>
        <script>
          function addClass() {
  document.body.classList.add("sent");
}

sendLetter.addEventListener("click", addClass);

            </script>
</html>