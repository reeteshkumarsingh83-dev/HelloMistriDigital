<html>
<head>
<style type=text/css>
 .image{
    display: flex;
    justify-content: center;
    height:400px;
    
 }
 .content{
    font-size: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    display:flex;
    justify-content: center;
    
 }
 .btn{
    display:flex;
    justify-content: center;
    margin-top: 15px; 
    
 }
 button {
    
    font-family:Georgia, 'Times New Roman', Times, serif;
    text-decoration: none;
    position: relative;
    border: none;
    font-size: 15px;
    font-family: inherit;
    color: #fff;
    width: 8em;
    height: 2em;
    line-height: 1em;
    text-align: center;
    background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
    background-size: 300%;
    border-radius: 30px;
    z-index: 1;
    cursor: pointer;
  }
  
  button:hover {
    animation: ani 8s linear infinite;
    border: none;
    
  }
  
  @keyframes ani {
    0% {
      background-position: 0%;
    }
  
    100% {
      background-position: 400%;
    }
  }
  
  button:before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
    background-size: 400%;
    border-radius: 35px;
    transition: 1s;
  }
  
  button:hover::before {
    filter: blur(20px);
  }
  
  button:active {
    background: linear-gradient(32deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);
  }
</style>
</head>
<body>
<div class="image">
    <img src="{{ asset('assets/img/404_page.png') }}">
</div>

<div class="content" style="color:rgb(98, 98, 98);">
  <b>Page not found</b>
</div>
<br>
<div class="content" style="color:darkblue;">
    You didn't break the internet, but can't find what you are looking for.
</div>
<div class="btn">
	<a href="{{ route('home') }}"> 
    <button>
        Go to home 
    </button>
    </a>
</div>
</body>
</html>
