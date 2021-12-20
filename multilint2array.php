<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multiple Lines to Javascript Array</title>
    <style>
        *{

            box-sizing: border-box;
        }
      body {
        margin: 25px;
      }
      #input {
        height: 150px;
        font-family: "Courier New", Courier, monospace;
      }
      .alert {
        background: #ddd;
        padding: 10px;
        margin-bottom: 20px;
      }
      #input {
        width: 100%;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
      }
      #go {
        border: none;
        background: #666;
        color: #fff;
        padding: 10px 20px;
      }
    </style>
  </head>
  <body>
    <div class="alert alert-info" role="alert">
      Enter multiple lines of things here and it will be converted to a
      Javascript array format.
    </div>
    <textarea id="input" class="u-full-width" placeholder=""></textarea>
    <input id="go" class="button-primary" type="submit" value="Go!" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      $("#go").click(function () {
        var lines = $("#input").val().split(/\n/);
        var output = [];
        var outputText = [];
        for (var i = 0; i < lines.length; i++) {
          // only push this line if it contains a non whitespace character.
          if (/\S/.test(lines[i])) {
            outputText.push('"' + $.trim(lines[i]) + '"');
            output.push($.trim(lines[i]));
          }
        }
        console.log(output);
        $("#input").val("[" + outputText + "]");
        $(".alert")
          .removeClass("alert-info")
          .addClass("alert-success")
          .text("Done!");
      });
    </script>
  </body>
</html>
