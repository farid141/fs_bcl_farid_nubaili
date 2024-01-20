<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tes Projek</title>
</head>

<body>
    @include('layouts.header')
    @yield('container')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        // $(function(){
        // $('#datepicker').datepicker();
        // });

        function performSearch() {
            // Get checkbox states
            var checkParam1 = document.getElementById("checkParam1").checked;
            var checkParam2 = document.getElementById("checkParam2").checked;

            // Get values from the input fields only if the corresponding checkbox is checked
            var param1 = checkParam1 ? document.getElementById("param1").value : null;
            var param2 = checkParam2 ? document.getElementById("param2").value : null;

            // Build the URL with non-null parameters
            var url = window.location.pathname + "?";
            if (param1 !== null) {
                url += "param1=" + encodeURIComponent(param1) + "&";
            }
            if (param2 !== null) {
                url += "param2=" + encodeURIComponent(param2);
            }

            // Redirect to the new URL
            window.location.href = url;
        }
        
        // Enable/disable input fields based on checkbox state
        document.getElementById("checkParam1").addEventListener("change", function () {
            document.getElementById("param1").disabled = !this.checked;
        });

        document.getElementById("checkParam2").addEventListener("change", function () {
            document.getElementById("param2").disabled = !this.checked;
        });
    </script>
</body>

</html>