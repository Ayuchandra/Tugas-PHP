<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Deret Fibonacci</title>
        <link rel="stylesheet" href="fibonachi.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="fibonachi.php" class="fibonachi-form" method="POST">
            <h1>Menghitung  Deret Fibonacci </h1>

            <div class="txtb">
                <input type="number" name="inp1">
            <span data-placeholder="Masukkan Bilangan 1"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="inp2">
                <span data-placeholder="Masukkan Bilangan 2 "></span>
            </div>

            <div class="txtb">
                <input type="number" name="jml">
                <span data-placeholder="Total Bilangan"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="hitung">

            <?php 

                if (isset($_POST['hitung']))
                {
                    $b1 = $_POST['inp1'];
                    $b2 = $_POST['inp2'];
                    $jumlah = $_POST['jml'];
                    
                    echo "Hasil : $b1 $b2"; 
                    
                    for ($i=$b1; $i<=$jumlah; $i++)
                    {

                    $output = $b2 + $b1;
                    echo " $output";
                    
                    $b1 = $b2;  
                    $b2 = $output; 
                    }

                } 

            ?>

        </form>

          <!-- Akhir Isi Menu Sign Up -->

        <!-- Awal Linear Gradien -->
        <script type="text/javascript">
            $(".txtb input").on("focus",function(){
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur",function(){
                if($(this).val()== "")
                $(this).removeClass("focus");
            });
        
        </script>
        <!-- Akhir Linear Gradien -->



    </body>
  ...
</html>