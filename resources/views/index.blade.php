<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800');
    body{
        background-color: ;
        padding: 0;
        margin: 0;
        font-family: "Open Sans";
    }
    h1{
        text-align: center;
        font-size: 36px;
    }
    h3{
        text-align: center;
        font-size: 30px;
        padding: 20px;
        font-weight: 400;
        letter-spacing: 1px;

    }
    input[type=text] {

        padding: 12px 20px;
        margin: 9px 0;
        box-sizing: border-box;
        border-radius: 10px;
        outline: none;
        width: 40%;
        height:20%;
        boredr:1px solid #7c7b7b;
    }
    input[type=text]:hover {
        border:1px solid #000;
        transition: 6s;
    }
    ::placeholder {
        color: #000;
        opacity: 1;
        font-weight: 400;
        font-size: 20px;
        text-align: center;


    }
    button{
        height: 50px;
        padding: 0;
        margin: 0;

    }
    .btn{
        border-radius: 30px;
        width: 14%;
        margin-left: 5px;
        font-size: 20px;

    }
    footer{
        margin-top: 50px;
        background: #000;
        text-align: center;
        padding: 10px;

    }
    footer p{
        color: #fff;
        padding: 10px;
        margin: 0;
        font-weight: 700;
        font-size: 20px;
    }
    @media(max-width: 992px){
        .btn{
            width: 20%
        }
        input[type=text]{
            width: 50%;
        }
    }
    @media(max-width: 768px){
        .btn{
            width: 40%
        }
        input[type=text]{
            width: 90%;
        }
    }
    @media(max-width: 440px){
        .btn{
            width: 50%;
            font-size: 18px;
        }
        input[type=text]{
            width: 100%;
        }
        h3{
            font-size: 22px;
        }
    }
    @media(max-width: 373px){
        h3{
            font-size: 20px;
            font-weight: 600;
        }
        h1{
            font-size: 28px;
            font-weight: 400;
        }


    }
</style>

<div class="container">
    <h1 class="text-center m-5">ابحث عن نتيجه الطالب </h1>

</div>


<section class="bg-success text-center p-5 mt-4">
    <div class="container p-3">
        <h3>ادخل رقم الطالب</h3>
        <form action="degree" method="Post">
            @csrf
            <input type="text" name="search" placeholder="رقم الطالب">
            <button type="submit" class="btn btn-info">بحث</button>
        </form>
    </div>
</section>

<footer>
    <p>© student 2021</p>
</footer>
