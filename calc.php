<!DOCTYPE html>
<html lang="ru">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
    	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Калькулятор</title>

		
	</head>
	<body>

        

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript">


            let b = document.body;
            b.className = "p-5 bg-light text-dark";

            let divContainer = document.createElement('div');
            divContainer.className = "container";
            b.prepend(divContainer);

            let divTextCenter = document.createElement('div');
            divTextCenter.className = "text-center";
            divContainer.prepend(divTextCenter);

            let h1 = document.createElement('h1');
            h1.innerText = "КАЛЬКУЛЯТОР";
            divTextCenter.prepend(h1);

            let form = document.createElement('form');
            form.method = "POST";
            form.className = "mt-5";
            divTextCenter.append(form);

            let divJCC = document.createElement('div');
            divJCC.className = "input-group justify-content-center";
            form.prepend(divJCC);

            let inputX1 = document.createElement('input');
            inputX1.className = "form-control col-2";
            inputX1.type = "text";
            inputX1.id = "x1";
            inputX1.name = "x1";
            inputX1.placeholder = "X1";
            divJCC.prepend(inputX1);

            let inputOper = document.createElement('input');
            inputOper.hidden = "true";
            inputOper.name = "oper";
            inputOper.id = "oper";
            divJCC.prepend(inputOper);

            let divBTNTOG = document.createElement('div');
            divBTNTOG.id = "btntog";
            divBTNTOG.className = "input-group-append";
            divJCC.append(divBTNTOG);

            let btnoper = document.createElement('button');
            btnoper.id = "btnoper";
            btnoper.className = "btn btn-outline-secondary dropdown-toggle";
            btnoper.type = "button";
            btnoper.setAttribute("data-toggle","dropdown");
            btnoper.setAttribute("aria-haspopup","true");
            btnoper.setAttribute("aria-expanded","false");
            divBTNTOG.prepend(btnoper);


            let dm = document.createElement('div');
            dm.className = "dropdown-menu";
            divBTNTOG.append(dm);

            let di1 = document.createElement('a');
            di1.className = "dropdown-item";
            di1.href = "#";
            di1.innerText = "+";
            dm.prepend(di1);

            let di2 = document.createElement('a');
            di2.className = "dropdown-item";
            di2.href = "#";
            di2.innerText = "-";
            dm.append(di2);

            let di3 = document.createElement('a');
            di3.className = "dropdown-item";
            di3.href = "#";
            di3.innerText = "*";
            dm.append(di3);

            let di4 = document.createElement('a');
            di4.className = "dropdown-item";
            di4.href = "#";
            di4.innerText = "/";
            dm.append(di4);

            let inputX2 = document.createElement('input');
            inputX2.className = "form-control col-2";
            inputX2.type = "text";
            inputX2.id = "x2";
            inputX2.name = "x2";
            inputX2.placeholder = "X2";
            divJCC.append(inputX2);


            let divBTNTOG2 = document.createElement('div');
            divBTNTOG2.className = "input-group-append";
            divJCC.append(divBTNTOG2);

            let btnclk = document.createElement('button');
            btnclk.id = "btnclk";
            btnclk.className = "btn btn-outline-secondary";
            btnclk.type = "submit";
            btnclk.innerText = "=";
            divBTNTOG2.prepend(btnclk);

            let span = document.createElement('span');
            span.className = "input-group-text  wresult";
            span.id = "result";
            span.innerText = "RESULT";
            divBTNTOG2.append(span);

            

           
            document.addEventListener("DOMContentLoaded", function(event) { 
            	

            	btntog.onclick = function (event){
            		let btnoperText = document.getElementById("btnoper"),
                        inputOper = document.getElementById("oper");
            		if (event.target.innerText) {
            			btnoper.classList.remove("dropdown-toggle");
            			btnoperText.innerText = event.target.innerText;
                        inputOper.value = event.target.innerText;
            		};

            	};

                x1.oninput = function (event){
                    this.classList.remove("is-invalid");
                };

                x2.oninput = function (event){
                    this.classList.remove("is-invalid");
                };
            });

               

		</script>


<?php
    function resultOut ($x1,$x2,$oper,$x3)
    {
        $result = "<script>document.getElementById('x1').value='".$x1."';"."document.getElementById('x2').value='".$x2."';"."btnoper.classList.remove('dropdown-toggle');"."document.getElementById('oper').value='".$oper."';"."document.getElementById('btnoper').innerText='".$oper."';"."document.getElementById('result').innerText=".$x3.";</script>";

        return $result;
    }

    if (isset($_POST['x1']) && isset($_POST['x2'])){ 
        $x1=$_POST['x1'];
        $x2=$_POST['x2'];
        $oper=$_POST['oper'];
        
        
        if (is_numeric($x1) &&  is_numeric($x2) ) {
            
            if ($oper=="+") {
                $x3 = $x1+$x2;
                echo resultOut($x1,$x2,$oper,$x3);
            } else
            {
                if ($oper=="-") {
                    $x3 = $x1-$x2;
                    echo resultOut($x1,$x2,$oper,$x3);
                } else
                {
                    if ($oper=="*") {
                        $x3 = $x1*$x2;
                        echo resultOut($x1,$x2,$oper,$x3);
                    } else 
                    {
                        if ($oper=="/") {

                            if ($x2 == 0)  { 
            
                                   echo "<script>document.getElementById('x2').classList.add('is-invalid');</script>";
                            } else
                            {
                                $x3 = $x1/$x2;
                                echo resultOut($x1,$x2,$oper,round($x3,3));
                            }
                        } else
                        {
                            echo "Выберите операцию!";
                        }
                                    

                    }
                }
            }


        } else
        {

            if (!is_numeric($x1))   {     
                echo "<script>document.getElementById('x1').classList.add('is-invalid');</script>";
            };
            if (!is_numeric($x2))   {     
                echo "<script>document.getElementById('x2').classList.add('is-invalid');</script>";
            };
        };
    };
?>

		
	</body>
</html>