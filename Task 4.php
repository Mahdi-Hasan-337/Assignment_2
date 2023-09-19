<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Task 4: Fibonacci Series printing using a Function</title>
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
        .link-btn{
            font-size: 1.2rem; 
            font-family: 'Times New Roman', Times, serif; 
            font-weight: bold; 
            text-decoration: none; 
            font-size: 1.2rem; 
            padding: 0.5rem;
            color: black;
        }
        .h4-style{
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }
        .rslt-p{
            font-size: 1.2rem; 
            font-weight: 600;  
            font-family: 'Times New Roman', Times, serif;
            color: black; 
            display: inline-flex; 
            width: 2.5rem; 
            height: 2.5rem; 
            text-align: center; 
            align-items: center; 
            justify-content: center;
            border: 0.1rem solid gray;
        }
    </style>
</head>
<body>
    <?php include './nav.php'; ?>
    <div class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center p-5">
            <div class="p-5 mb-3 shadow-lg">
                <h4 class="text-center mb-4" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Task 4: Fibonacci Series printing using a Function</h4>
                <div class="text-center">
                    <?php
                        function fibonacci($n){
                            $fib = [];
                            $fib[0] = 0;
                            $fib[1] = 1;
                            
                            if ($n >= 1) {
                                echo "<p class='rslt-p' style=''>$fib[0]</p>" . "  ";
                            }
                            if ($n >= 2) {
                                echo "<p class='rslt-p' style=''>$fib[1]</p>" . "  ";
                            }
                            for ($i = 2; $i < $n; $i++) {
                                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                                echo "<p class='rslt-p' style=''>$fib[$i]</p>" . "  ";
                            }
                        }
                        
                        fibonacci(15);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>