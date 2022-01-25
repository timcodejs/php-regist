<body>
    <script>
        const result = confirm( 'Really delete your Account?' );
        if(result) {
            location.href="delete_ok.php";
        } else {
            history.back();
        }
    </script>
</body>
