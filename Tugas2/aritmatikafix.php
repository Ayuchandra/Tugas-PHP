<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Barisan Aritmatika</title>
        <link rel="stylesheet" href="aritmatikafix.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="aritmatikafix.php" class="aritmatika-form" method="GET">
            <h1>Menghitung  Barisan Aritmatika</h1>

            <div class="txtb">
                <input type="number" name="inp1">
            <span data-placeholder="Masukkan Bilangan 1"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="inp2">
                <span data-placeholder="Beda"></span>
            </div>

            <div class="txtb">
                <input type="number" name="ke">
                <span data-placeholder="Suku ke-n"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="hitung">

            <?php 

                if(isset($_GET['hitung']))
                {
                    $awal= $_GET['inp1'];
                    $beda = $_GET['inp2'];
                    $n = $_GET['ke'];

                    $output = $awal + ($n - 1)* $beda;
                    echo "suku ke- $n bilangan tersebut yaitu $output  <br>" ;
                    
                    $hasil= $awal + $beda;
                    echo "barisan angka : $awal $hasil";

                    for ($i=$awal; $i<=8; $i++)
                    {

                    $output = $hasil+$beda;
                    echo " $output";
                    
                    $awal = $hasil;
                    $hasil = $output;
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