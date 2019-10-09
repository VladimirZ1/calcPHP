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
            h1.innerText = "Приветствую!";
            divTextCenter.prepend(h1);

            let h3 = document.createElement('h3');
            h3.innerHTML = "Попробуй самый крутой <a href='calc.php'>калькулятор</a>";
            divTextCenter.append(h3);

            let img = document.createElement('img');
            img.className = "img-thumbnail";
            img.src = "calc.jpg";
            img.width = "150";
            img.alt = "Калькулятор";
            divTextCenter.append(img);
  		
	


			
		</script>
	</body>
</html>

