<script src="https://cdn.firebase.com/js/client/1.0.11/firebase.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<h3>Create a post.</h3>
<input id="titleInput" type="text" placeholder="Title" style="display:block"/>
<input id="authorInput" type"text" placeholder="Date - August 1, 2021" style="display:block"/>
<textarea id="contentInput" rows="6" style="width:100%;"placeholder="Enter Content Here..." style="display:block"></textarea>
<button id="submit">Submit</button>
<button id="delete">Delete Posts</button>

<script>

$(document).ready(function() {
    var dataRef = new Firebase('FIREBASE DOMAIN');

    $('#submit').click(function (e) {

      // Get all form data
      var author = $('#authorInput').val();
      var title = $('#titleInput').val();
      var content = $('#contentInput').val();

      //console.log("Sending:\nTitle: " + title + "\nAuthor: " + author + "\nContent: " + content);

      // Check everything is filled out
      if(author != "" && title != "" && content != ""){
        // Push to Firebase
        dataRef.push({author:author, title:title, content:content});

        // Rest Input Fields
        $('#titleInput').val('');
        $('#contentInput').val('');
      }
    });

    $('#delete').click(function (e) {
        // Delete Posts
        dataRef.remove();
        // hackity method!
        location.reload(); // Page Refresh
    });

    // Callback when new post available
    dataRef.limit(10).on('child_added', function (snapshot) {

        // Post Object
        var post = snapshot.val();

        var title = document.createElement("h1");
        title.appendChild(document.createTextNode(post.title));
        var author = document.createElement("h3");
        author.appendChild(document.createTextNode(post.author));
        var br = document.createElement("br");
        var content = document.createElement('div');
        content.id = "bodyid";
        content.innerHTML = post.content;
        console.log(content);



        var hr = document.createElement("hr");

        $('.posts').prepend(content);
        $('.posts').prepend(author);
        $('.posts').prepend(title);
        $('.posts').prepend(hr);

    });
})
</script>
