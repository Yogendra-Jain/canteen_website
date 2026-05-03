<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="order.css">
	
</head>
<body>
    <div class="container">
        <form method="post" action="controllor/controllor.php" enctype="multipart-form-data">
        <div class="row p-5">
            <div class="col-md-6 offset-3">
                <h3 class="signin-title">Order Food</h3>
    
                <div class="form-group mb-3">
                    <label for="pet-select" class="choose">Choose a Food <span class="required">*</span></label>

                    <select name="pets" id="pet-select">
                        <option value="">--Please choose a Food--</option>
                        <option value="dog">Poha</option>
                        <option value="cat">Kachori</option>
                        <option value="hamster">Sandwich</option>
                        <option value="parrot">Burger</option>
                        <option value="spider">Pizza</option>
                        <option value="goldfish">Tea</option>
                        <option value="goldfish">Cofee</option>
                        <option value="goldfish">French Fries</option>
                        <option value="goldfish">Maggi</option>
                        <option value="goldfish">Pav Bhaji</option>
                        <option value="goldfish">Cold Coffee</option>
                        <option value="goldfish">Momos</option>
                        <option value="goldfish">Pasta</option>
                        <option value="goldfish">Samosa</option>
                        <option value="goldfish">Chole Bhature</option>
                        <option value="goldfish">Aloo Patties</option>
                    </select>
                </div>

                
                

                <div class="form-group mb-3">
                    <label>Quantity <span class="required">*</span></label>
                    <input type="number" name="contact" class="form-control" placeholder="Quantity">
                </div>
    
                <div class="form-group mb-3">
                    <label>Arriving Time <span class="required">*</span></label>
                    <input type="time" name="email" class="form-control" placeholder="Time">
                </div>
    
                <div class="form-group mb-5">
                    <button class="btn btn-success btn-md w-100" type="submit" name="singup"  >Submit & Pay</button>
               
                </div>
            </div>  
        </div>
        </form>
    </div>
    
</body>
</html>