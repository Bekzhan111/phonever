<html>
<head>
    <title>Phone Number Authentication with Firebase Web</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+7 7** *** ** **">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
         var firebaseConfig = {
        apiKey: "AIzaSyCfZ2fg1ZbOVMqgSEcLUyiaA_t1gpJNRE4",
        authDomain: "book-it-7b365.firebaseapp.com",
        databaseURL: "https://book-it-7b365.firebaseio.com",
        projectId: "book-it-7b365",
        storageBucket: "book-it-7b365.appspot.com",
        messagingSenderId: "287985617377",
        appId: "1:287985617377:web:15c02be695e7f3dec36aa0",
        measurementId: "G-Z8MWGLKKCF",
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();

    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>