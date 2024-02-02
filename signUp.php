<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="profile.php"   method="post">

        Email <input type="text" name="email" id="Email">
        <p id="error1" style="color: red;"></p>
        <br> <br> 
        First Name <input type="text" name="fName" id="FName">
        <p id="error2" style="color: red;"></p>
        <br> <br>
        Last Name <input type="text" name="lName" id="LName">
        <p id="error3" style="color: red;"></p>
        <br> <br>
        Age <input type="number" name="age" id="Age">
        <p id="error4" style="color: red;"></p>
        <br> <br>
        Password <input type="password" name="pass" id="Pass"> 
        <p id="error5" style="color: red;"></p>
        <br> <br>
        <input type="submit" value="sign Up" id="submit">
    </form> 

<!-- هستخدمة جافا سكريبت عشان اهندل بس الفورم  حاولت اعملها ب php ومعرفتش اهندلها كويس ما علينا  -->


   <script>
     
     const error1=document.getElementById('error1');
     const error2=document.getElementById('error2');
     const error3=document.getElementById('error3');
     const error4=document.getElementById('error4');
     const error5=document.getElementById('error5');
     const submit = document.getElementById("submit");  
     const email = document.getElementById("Email");  
     const fName = document.getElementById("FName");  
     const lName = document.getElementById("LName");  
     const age = document.getElementById("Age");  
     const pass = document.getElementById("Pass"); 
        
    submit.onclick=function(event) {

        if(!email.value) {
            error1.innerText = "email is required";
        } // هنا عشان ميسبش الفيلد فاضي

        if(!fName.value) {
            error2.innerText = "first name is required";

        }else if (!containsAlphabet(fName.value)) {
            error2.innerText = "First name should contain at least one alphabet character";
        }// هنا كنت باكد بس ان الاسم لازم يبقى فيه ع الاقل حرف واحد عشان اليوزر لو دخل الاسم كله ارقام مش هينفع


        if(!lName.value) {
            error3.innerText = "last name is required";

        } else if (!containsAlphabet(lName.value)) {
            error3.innerText = "Last name should contain at least one alphabet character";
        }// هنا كنت باكد بس ان الاسم لازم يبقى فيه ع الاقل حرف واحد عشان اليوزر لو دخل الاسم كله ارقام مش هينفع

        if(!age.value) {
            error4.innerText = "age is required";

        } else  if(age.value && (age.value>90 || age.value<5|| age.value==0) ) {
            error4.innerText = "enter valid age";
        }// هنا حطيت شوية كونديشن كدة من دماغي حساها منطقية بعض الشيء

        if(!pass.value) {
            error5.innerText = "password is required";

        } 

        if (error1.innerText || error2.innerText || error3.innerText || error4.innerText || error5.innerText) {
            event.preventDefault();
        }//  عملت الكونديشن ده عشان لو في اي ايرور ميروحش لصفحة البروفايل 
        
        

        function containsAlphabet(value) {
        return /[a-zA-Z]/.test(value);
    }// دي الفانكشن اللي كنت مستخدماها في كونديشن الاسم بترجع ترو لو في حرف واحد في الاسم وفولس لو مفيش ولا حرف
 } 
   </script>
</body>
</html>