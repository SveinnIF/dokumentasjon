<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Documentation for Group 1.</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <h1>
    Documentation for Group 1.
  </h1>
  <h2>
    Contact information:
  </h2>
  <p>1- Sveinn Frimannsson: sveinnif@hiof.no</p>
  <p>2- Abdelaziz Qassi: abdelazq@hiof.no</p>
  <p>så kan dere andre legge til deres her også</p>
  <h2>
    How the website was made:
  </h2>
  <p>* We started with aquiering approval to fork an existing open source project that had some of the basic functionality needed to make the website work.</p>
  <p>* Source code can be found here: <a href='https://github.com/SveinnIF/User-Management-PHP-MYSQL' > GitHub page.</a></p>
  <p>* The server was set up in a similar manor as the <a href='https://www.cloudbooklet.com/how-to-install-lamp-apache-mysql-php-in-ubuntu-20-04/' > LAMP server tutorial</a> though with a few modifications and additions.</p>
  <h3>The forgotten password system:</h3>
  <p>The forgotten password page was created by modifying some existing code found on the
    internet, then taking some code that was part of the original site and forcing it to work as we wanted.</p>
  <p> Now it asks for forgotten password if the lecturer has written the wrong
    password once, the lecturer is then prompted to input their mail address after
    which they will get a mail with a custom link that takes them to the reset page where they can input a new password.</p>
  <h4>Api system</h4>
  <p>APi stand for Application programming Interface, it's engine under the hood.
    it's what others can't see on front-end. It takes the request and tell the system
    what you want to do and then return the response back to you. The api was created to show information of
    registered student in the course as json file in the back-end. You must write specific student Id number to get full info.
    Id must be written as integer otherwise will not get write info. </p>
  <p>* Api source code can be found here: <a href='https://github.com/SveinnIF/User-Management-PHP-MYSQL' > GitHub page.</a></p>
 


<style>
  body{
    margin-left: 15%;
    border: solid gray;
    width: 70%;
  }

  p{
    text-align: justify;
    font-size: large;
    font-family: "Times New Roman";
    margin: 2%;
    color: black;

  }
  h2, h3, h4{
    margin-left: 5%;

  }

  h1{
    text-align: center;


  }
  html {
    color: #222;
    font-size: 1em;
    line-height: 1.4;
  }

  ::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
  }

  ::selection {
    background: #b3d4fc;
    text-shadow: none;
  }


  hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
  }
</style>
</body>

</html>
