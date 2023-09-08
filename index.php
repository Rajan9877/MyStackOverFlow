<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,600&display=swap" rel="stylesheet">
    <title>Reply For A Comment</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
        }
        h1{
            text-align: center;
            margin-top: 15px;
            color: #ff6e00;
        }
        .container1{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container2{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        #formsubmit input{
            border: 1px solid #ff6e00;
            width: 500px;
            padding: 15px;
            border-radius: 50px;
            margin-top: 5px;
            margin-bottom: 5px;
            outline: none;
        }
        #formsubmit textarea{
            border: 1px solid #ff6e00;
            width: 500px;
            padding: 15px;
            border-radius: 50px;
            margin-top: 5px;
            outline: none;
        }
        .btndiv{
            text-align: center;
        }
        .btn{
            padding: 15px;
            border-radius: 50px;
            margin-top: 5px;
            cursor: pointer;
            background-color: #ff6e00;
            color: white;
            border: 2px solid #ff6e00;
            transition: all 0.2s;
        }
        .btn:hover{
            color: rgb(240, 240, 240);
            background-color: #ff8324;
        }
        hr{
            border-top: 2px solid grey;
        }
        .commentcontainer{ 
            display: flex;
            flex-direction: column;
            width: 500px;
        }
        .rightcommentcontainer{
            display: flex;
            justify-content: space-between;
            width: 500px;
            margin-left: 15px;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 50px; 
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .replybtn{
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: #ff6e00;
        }
        .viewreply{
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: #ff6e00;
        }
        .replydiv{
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 50px;
            margin-left: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: none;
        }
        .containercomment{
            display: flex;
        }
        .replybutton{
            padding: 7px;
            border-radius: 50px;
            margin-top: 7px;
            cursor: pointer;
            background-color: #ff6e00;
            color: white;
            border: 2px solid #ff6e00;
        }
        .replybutton:hover{
            color: rgb(240, 240, 240);
            background-color: #ff8324;
        }
        .replybuttondiv{
            text-align: center;
        }
        .replyform{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .replyform input{
            padding: 7px;
            border-radius: 50px;
            border: 1px solid #ff6e00;
            outline: none;
        }
        .replyform textarea{
            padding: 7px;
            border-radius: 50px;
            border: 1px solid #ff6e00;
            outline: none;
        }
        .viewreplyform{
            display: inline;
        }
        .replyviewcontainer{
            display: none;
            margin-bottom: 15px;
            padding: 7px;
            border-radius: 50px;
            margin-left: 120px;
        }
        .replyviewall{
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 7px;
            border-radius: 50px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 7px;
        }
        .hidereplies{
            background-color: transparent;
            border: none;
            color: #ff6e00;
            display: none;
            cursor: pointer;
        }
        .replypara{
            background-color: #ff6e00;
            color: white;
            display: flex;
            padding: 15px;
            justify-content: center;
            align-items: center;
            position: fixed;
            right: 5px;
            top: 70px;
            border-radius: 50px;
            display: none;
        }
        .username{
            display: flex;
            justify-content: center;
            font-weight: bold;
            color: #ff6e00;
        }
        .comments{
            margin-bottom: 15px;
        }
        hr{
            margin-bottom: 15px;
        }
        .navbar {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 10px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: white; 
        z-index: 1000;  
    }

    .navbar div{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ff6e00;
        font-weight: bold;
    }

    .heading{
        margin-top: 67px;
        margin-bottom: 5px;
    }
    .leftcommentcontainer{
        margin-right: 5px;
        margin-left: 10px;
    }
    .footer{
        background-color: #ff8324;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    </style>
</head>
<body>
    <span class="replypara">Reply Added Successfully.</span>
    <div class="navbar">
        <div><img src="img/download.png" alt="My Stack Overflow" width="30px"><div>My Stack Overflow</div></div>
    </div>
    <h1 class="heading">Add Your Question From Here</h1>
    <div class="container1">
        <form id="formsubmit" method="post">
            <label for="name">Name : </label><br>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required><br>
            <label for="email">Email : </label><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br>
            <label for="comment">Question : </label><br>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Enter Your Question" required></textarea>
            <br>
            <div class="btndiv">
                <button class="btn">Post Question</button>
            </div>
        </form>
    </div>
    <h1 class="comments">Questions & Answers</h1>
    <hr>
    <div class="container2">
        <div class="commentpost">
            <!-- <div class="commentcontainer">
                <div class="containercomment">
                    <div class="userimage">
                        <div class="leftcommentcontainer">
                            <img src="img/user.png" alt="User" width="50px">
                        </div>
                        <div class="username">
                                <p>Raj</p>
                        </div>
                    </div>
                    <div class="rightcommentcontainer">
                        <div>
                            <small>2023-09-06 10:58:55</small>
                            <p>Hello</p>
                        </div>
                        <div>
                            <button class="replybtn">Reply</button>|
                            <form class="viewreplyform">
                                <input type="hidden" name="commentid" id="commentid" value="">
                                <button class="viewreply">View Replies</button>
                            </form>
                        </div>
                    </div> -->
                    <p style="color: #ff6e00; margin-bottom: 15px; font-weight: bold;">There is no question at this moment.</p>
                </div>
                <div class="replydiv">
                    <form class="replyform">
                        <div>
                            <label for="name">Name : </label>
                            <input type="text" name="name" id="name" placeholder="Enter Your Name" required><br><br>
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email" required><br><br>
                            <label for="reply">Reply : </label>
                            <input type="text" name="reply" id="reply" placeholder="Enter Your Reply" required>
                            
                            <input type="hidden" name="comment_id" id="comment_id" value="">
                        </div>
                        <div class="replybuttondiv">
                            <button class="replybutton">Post</button>
                        </div>
                    </form>
                </div>
                <div class="replyviewcontainer">
                    <div class="replyviewall">
                        <p>This is another page.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?> | Created By Rajan</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    function loaddata(){
        $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "read.php",  
        dataType: 'json',                          
        success: function(response){                    
            $('.commentpost').html('');
            $.each(response, function(index, comment) {
                $('.commentpost').append(' <div class="commentcontainer"><div class="containercomment"><div class="leftcommentcontainer"><img src="img/user.png" alt="User" width="50px"><div class="username"><p>'+comment.name+'</p></div></div><div class="rightcommentcontainer"><div><small>'+comment.date+'</small><p>'+comment.comment+'</p></div><div><button class="replybtn">Reply</button>|<button class="hidereplies">Hide Replies</button><form class="viewreplyform"><input type="hidden" name="commentid" id="commentid" value="'+comment.comment_id+'"><button class="viewreply">View Replies</button></form></div></div></div><div class="replydiv"><form class="replyform"><div><label for="replyname">Name : </label><input type="text" name="replyname" id="replyname" placeholder="Enter Your Name" required><br><br><label for="replyemail">Email : </label><input type="email" name="replyemail" id="replyemail" placeholder="Enter Your Email" required><br><br><label for="reply">Reply : </label><textarea name="reply" id="reply" placeholder="Enter Your Reply" required></textarea><input type="hidden" name="comment_id" id="comment_id" value="'+comment.comment_id+'"></div><div class="replybuttondiv"><button class="replybutton">Post</button></div></form></div> <div class="replyviewcontainer"><div class="replyviewall"> <p>This is another page.</p></div></div></div>');     
            });
        }
    });
    }

    loaddata();
    $(document).ready(function(){
    $("#formsubmit").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("insert.php", formValues, function(data){
            // Display the returned data in browser
            $(".replypara").html(data);
            $(".replypara").fadeIn();
            setTimeout(()=>{
                $(".replypara").fadeOut();
            },3000)
            $('#name').val('');
            $('#email').val('');
            $('#comment').val('');
            loaddata();
        });
    });
});

// $(document).ready(function(){
//   $(".replybtn").click(function(){
//     if($(".replybtn").text()=='Cancel'){
//         $(".replybtn").text('Reply')
//     }else{
//         $(".replybtn").text('Cancel')
//     }
//     $(".replydiv").slideToggle();
//   });
// });
$(document).ready(function() {
    // Attach a click event handler to the "Reply" buttons using event delegation
    $('.commentpost').on('click', '.replybtn', function() {
        if($(this).text()=="Cancel"){
            $(this).text('Reply');
        }else{
            $(this).text('Cancel');
        }
        // Find the closest parent commentcontainer
        var commentContainer = $(this).closest('.commentcontainer');
        
        // Toggle the visibility of the replydiv within the parent commentcontainer
        commentContainer.find('.replydiv').slideToggle();
    });
    $('.commentpost').on('click', '.hidereplies', function() {
        
        // Find the closest parent commentcontainer
        var commentContainer = $(this).closest('.commentcontainer');
        
        // Toggle the visibility of the replydiv within the parent commentcontainer
        commentContainer.find('.replyviewcontainer').slideUp();
        commentContainer.find('.hidereplies').hide();
        commentContainer.find('.viewreply').show();
    });
        // Handle the form submission for posting replies
        $('.commentpost').on('submit', '.replyform', function(event) {
        event.preventDefault(); 
        var replyText = $(this).find('#reply').val();
        var replyName = $(this).find('#replyname').val();
        var replyEmail = $(this).find('#replyemail').val();
        var commentId = $(this).find('#comment_id').val();
         // Find the closest parent commentcontainer
         var commentContainer = $(this).closest('.commentcontainer');
        
        // Toggle the visibility of the replydiv within the parent commentcontainer
        commentContainer.find('.replyviewcontainer').slideUp();
        commentContainer.find('.hidereplies').hide();
        commentContainer.find('.viewreply').show();
        formValues = {
            replyName : replyName,
            replyEmail : replyEmail,
            replyText : replyText,
            commentId : commentId
        }
        $.post("replyinsert.php", formValues, function(data){
            // Display the returned data in browser
            $('.replypara').html(data);
            $('.replypara').fadeIn();
            setTimeout(()=>{
                $('.replypara').fadeOut();  
            },3000)
            // $(this).find('#reply').val('');
        });
        $(this).find('#reply').val('');
        $(this).find('#replyname').val('');
        $(this).find('#replyemail').val('');
        $('.replybtn').text("Reply");
        $('.replydiv').slideUp();
    });

        $('.commentpost').on('submit', '.viewreplyform', function(event) {
        event.preventDefault(); 
        var commentId = $(this).find('#commentid').val();
        formValues = {
            commentId : commentId
        }
        var replyviewcontainer = $(this).closest('.commentcontainer').find('.replyviewcontainer');
        var viewreply = $(this).closest('.commentcontainer').find('.viewreply');
        var hidereplies = $(this).closest('.commentcontainer').find('.hidereplies');
        $.post({
    url: "replyread.php",
    data: formValues,
    dataType: "json", // Set the expected data type to JSON
    success: function(data) {
        console.log(data);
            replyviewcontainer.html(''); 
            $.each(data, function(index, comment) {
                viewreply.hide();
                hidereplies.show();
                replyviewcontainer.append('<div class="replyviewall"><div class="leftcommentcontainer"><img src="img/user.png" alt="User" width="50px"><div class="username"><p>'+comment.name+'</p></div></div><div><small>'+comment.date+'</small><p>'+comment.reply+'</p></div></div>');
            })
            replyviewcontainer.slideDown(); 
    },
    error: function(xhr, textStatus, errorThrown) {
                viewreply.hide();
                hidereplies.show();
                replyviewcontainer.html(''); 
                replyviewcontainer.append('<div class="replyviewall"> <p>There is no reply yet.</p></div>');
                replyviewcontainer.slideDown();
    }
    });   
    });
    });
    </script>
</body>
</html>