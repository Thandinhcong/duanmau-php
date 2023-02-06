<footer>
    <p> Copyright © by Dinh Cong Than</p>
</footer>
<script>
        var hinh = document.querySelector("#hinh");
        var ARR = [];
        var index = 0;
        document.body.onload = function () {
            for (var i = 0; i < 6; i++) {
                ARR[i] = new Image();
                ARR[i].src = "view/img/product" + (i + 1) + ".jpg";
            }
            _auto();
        }
        function _next() {
            index++;
            if (index > 5) index = 0;
            hinh.src = ARR[index].src;
        }
        var t;
        function _auto() {
            clearInterval(t);
            t = setInterval("_next()", 2000);
        }
    </script>
</div>
</body>

</html>