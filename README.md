*{
    padding:0;
    margin:0;
    box-sizing:border;
    font-family:'Poppins',sans-serif;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
}

/* Home page */

.banner{
    width:100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.banner video{
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.content{
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(1, 0, 5, 0.3),rgba(4, 1, 17, 0.3));



}

/* General styling for larger screens */
nav {
    width: 100%;
    position: fixed;
    background-color: rgb(21, 74, 74);
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
}

nav .logo {
    width: 60px;
    margin: 2vh;
    margin-left: 8%;
}

.navbar {
    display: flex;
    margin-right: 4vh;
}

nav ul li {
    list-style: none;
    display: inline-block;
    margin-left: 40px;
}

.navbar a {
    color: white;
    font-size: 17px;
    padding: 10px 22px;
    border-radius: 4px;
    font-weight: 500;
    text-decoration: none;
    transition: ease 0.4s;
}

.navbar a:hover, .navbar a.active {
    background: white;
    color: black;
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
    border-radius: 5px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 17px;
}

/* Responsive styling for mobile screens */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    nav .logo {
        margin-left: 50%;
        margin-bottom: 10px;
    }

    .navbar {
        flex-direction: column;
        margin-right: 0;
        width: 100%;
    }

    nav ul li {
        display: block;
        margin-left: 0;
       
    }

    .navbar a {
        font-size: 16px;
        padding: 10px;
        width: 100%;
        text-align: left;
    }
}

/* Responsive styling for extra small screens */
@media (max-width: 480px) {

    nav .logo {
        margin-left: 50%;
        width: 100px;
    }

    .navbar a {
        font-size: auto;
        padding: 10px;
    }
}

.title{
    text-decoration: none;
    /* display: inline-block; */
    font-size: auto;
    color: rgb(255, 255, 255);
    padding: 14px 17px;
    margin-top: 32vh;
    text-align: center;
    vertical-align: center;
}

.title h1{
    font-size: 10vh;
    text-shadow: 2px black;
    transition: ease 0.3s;
}

.title h1:hover{
    color:transparent;
    -webkit-text-stroke: 1px white;
    
}

.button{
    display: inline-block;
    margin-top:5vh;
    font-size: 25px;
    padding: 10px 30px;
    color: rgb(21, 74, 74);
    /* background-color:rgb(164, 44, 44); */
    background-color: white;
    border-radius: 20px;
    text-decoration: none;
    transition: ease 0.30s;
}

.button:hover{
    transform: scale(1.1);
    color: white;
    background-color: rgb(21, 74, 74);
    /* border: 2px solid rgb(42, 37, 68); */
    box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.4);
    padding: 10px 30px;
}

 



.location-title{
    text-align: center;
}

.location-title h2{
    font-size: 40px;
    font-weight: 650;
    padding-top: 75px;
    padding-bottom: 10px;
    line-height: 2;
}



/* Locations */
@media (min-width: 1000px){
    .col-content{
        margin-left:60px;
    }
}
.location h4{
    font-size: 25px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 2px;
}
.location-content{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.col-content{
    position: relative;
    filter:brightness(95%);
    transition: all 0.3s cubic-bezier(0.445,0.05,0.55,0.95);

}

.col-content img{
    margin-bottom: 40px;
    height: 500px;
    border-radius: 27px;
    width: 100%;
    
}

.col-content h5{
    position: absolute;
    font-size: 25px;
    color: white;
    font-weight: 500;
    left: 20px;
    bottom: 105px;
    cursor: pointer;
}

.col-content p{
    position: absolute;
    font-size: 20px;
    color: white;
    left: 20px;
    bottom: 80px;
    cursor: pointer;
}

.col-content:hover{
    filter: brightness(120%);
    transform: scale(1.03);
    cursor: pointer;
}

/* Newsletter */

.newsletter{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}

.newstext h2{
    margin-top: 100px;
    font-size: 38px;
}

.newstext p{
    font-size: 20px;
    color: #4c4c4c;
}

.newsletter form{
    margin-top: 100px;
    width: 100%;
    position: relative;
}

.newsletter form input:first-child{
    display: inline-block;
    width: 300px;
    font-size: 17px;
    outline: none;
    border: none;
    border-radius: 20px;
    padding: 20px 150px 20px 30px;
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
}

.newsletter form input:last-child{
    display: inline-block;
    position: absolute;
    outline: none;
    border: 2px solid transparent;
    border-radius: 20px;
    color: white;
    background-color: rgb(21, 74, 74);
    padding: 14px 30px;
    cursor: pointer;
    font-size: 17px;
    font-weight: 450;
    top: 6px;
    right: 6px;
    transition: ease 0.30s;
}

.newsletter form input:last-child:hover{
    border: 2px solid rgb(21, 74, 74);
    background-color: white;
    color: rgb(21, 74, 74);
}


/* Footer */

.footer{
    margin-top: 80px;
    background-color: rgb(21, 74, 74);
}

.foot{
    padding: 20px 0;
}

.footer-content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}

.footlinks h4{
    margin-top: 30px;
    font-size: 20px;
    font-weight: 600;
    color: white;
    margin-bottom: 30px;
    position: relative;
}


.footlinks h4::before{
    content: "";
    position: absolute;
    height: 2px;
    width: 70px;
    left: 0;
    bottom: -7px;
    background: white;
}

.footlinks ul li{
    margin-bottom: 15px;
}

.footlinks ul li a{
    font-size: 17px;
    color: #dddddd;
    display: block;
    transition: ease 0.30s;
}

.footlinks ul li a:hover{
    transform: translate(6px);
    color: white;
}

.social a{
    font-size: 25px;
    margin: 4px;
    height: 40px;
    width: 40px;
    color: rgb(21, 74, 74);
    background-color: white;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    transition: ease 0.30s;
}

.social a:hover{
    transform: scale(1.2);
}

.end{
    text-align: center;
    padding-top: 60px;
    padding-bottom: 12px;
}

.end p{
    font-size: 15px;
    color: white;
    letter-spacing: 1px;
    font-weight: 300;
}
.main{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.connectbtn{
    display: inline-block;
    background-color: #fc0050;
    font-size: 18px;
    color: white;
    font-weight: bold;
    padding: 13px 30px;
    border-radius: 30px;
    transition: ease 0.4s;
    border: 2px solid transparent;
    letter-spacing: 1px;
}

.connectbtn:hover{
    background-color: transparent;
    border: 2px solid #fc0050;
    transform: scale(1.1);
}

.connect-section{
    margin-top: 26px;
}


.social-icons a{
    height: 40px;
    width: 40px;
    margin: 4px;
    font-size: 30px;
    color: #101010;
    background-color: white;
    border-radius: 20px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    transition: ease 0.30s;
}

.social-icons a:hover{
    transform: scale(1.2);
}

/* Contact Us */

.contactbody{
    background-color: #101010;
    background-repeat: no-repeat;
    background-size: cover;
    
}

.contact{
    padding: 110px 30%;
    height: 100%;
    min-height: 100vh;
}

.contact-form h1{
    font-size: 80px;
    color: white;
    margin-bottom: 20px;
}

.contact-form h1 span{
    color:#fc0050;
}

.contact-form p{
    color: white;
    line-height: 30px;
    letter-spacing: 1px;
    font-size: 23px;
    margin-bottom: 20px;
}


.contact-form form input,form textarea{
    width: 100%;
    padding: 17px;
    border: none;
    outline: none;
    background-color: #191919;
    font-size: 20px;
    color: white;
    margin-bottom: 10px;
    border-radius: 10px;
}

.contact-form form .submit-btn{
    display: inline-block;
    background-color: #fc0050;
    font-size: 27px;
    font-weight: 600px;
    border: 2px solid transparent;
    border-radius: 40px;
    width: 220px;
    cursor: pointer;
    transition: ease 0.30s;

}

.contact-form form .submit-btn:hover{
    border: 2px solid #fc0050;
    background-color: transparent;
    transform: scale(1.1);

}

/* Registration Form */

.register-body{
    background-color: #101010;
    background-repeat: no-repeat;
    background-size: cover;

}

.registration{
    padding: 110px 30%;
    height: 100%;
    min-height: 100vh;
}

.register-form h1{
    font-size: 80px;
    color: white;
    margin-bottom: 20px;
}
.register-form h1 span{
    color: #fc0050;
}

.register-form{
    color: white;
    font-size: 20px;
}

.register-form form input{
    color: white;
    padding: 17px;
    background-color: #191919;
    font-size: 20px;
    outline: none;
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    
}
.register-form h4{
    font-size: 22px;
    font-weight: 500;
    margin-top: 20px;
    color: #fc0050;
}


.register-form form .submitbtn{
    display: inline-block;
    background-color: #fc0050;
    font-size: 27px;
    font-weight: 600px;
    border: 2px solid transparent;
    border-radius: 60px;
    width: 220px;
    cursor: pointer;
    transition: ease 0.30s;
}

.register-form form .submitbtn:hover{
    border: 2px solid #fc0050;
    background-color: transparent;
    transform: scale(1.1);
}


.location-body{
    background-color: #191919;
    color: white;
}

.location-section{
    padding: 110px;
    height: 100%;
    min-height: 100vh;
}

.location-heading h1{
    margin-top: 20px;
    font-size: 60px;
    margin-bottom: 20px;
}

.location-heading h1 span{
    color: #fc0050;
}

.location-detail h1{
    padding-top: 60px;
    color: #fc0050;
    font-size: 40px;
}

.location-detail p{
    font-size: 20px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.location-img img{
    height: 400px;
    width: 400px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.stars i{
    font-size: 20px;
    color: rgb(197, 167, 44);
}
