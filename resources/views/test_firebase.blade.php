<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Document</title>
</head>
<body>
<div class="row">
    <form class="col s12">


        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>

        <button type="button" onclick="submits()">Submit</button>
        </div>
    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    // alert(9);

    const obj = {
        name : "Shuvo",
        array : {array: [1,2,"3"]},
        function : () => "Shuvo"
    }

    function submits(){
        console.log(obj.array.array);
        console.log(obj.array.array[2]);
        console.log(obj.array.array);
        let a=document.querySelector('#email');
        console.log(a);
        console.log(a.attributes.class);
    }

</script>
<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyDXQAmnuH9WZRHvIdLMCqMrHQrcfSHIpJA",
        authDomain: "sonic-cumulus-311716.firebaseapp.com",
        projectId: "sonic-cumulus-311716",
        storageBucket: "sonic-cumulus-311716.appspot.com",
        messagingSenderId: "617265925638",
        appId: "1:617265925638:web:adf221ae33971bc4ae3d87",
        measurementId: "G-QXREN40NEE"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    // console.log(analytics);
</script>
</body>
</html>
