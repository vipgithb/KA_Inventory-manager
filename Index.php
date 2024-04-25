<?php
$message= null;
$user = "root";
$servername = "localhost";
$password = "";
$dbname = "invm";
$con = mysqli_connect($servername, $user, $password, $dbname);
if ($con->connect_errno) {
    die("Connection Failed " . mysqli_connect_errno());
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible"  />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body id="EleM">
    <header id="navbar">
      <nav class="navbar-Container">
        <div class="navbar-logo">
        </div>
        <div id="cont" style="display:inline-block">
          <img src="assets/img1.png" alt="My Logo" style="height: 50px; width: 50px;">
          <h3>krishakagro Inventory Manager</h3>
          <!-- Other navigation items -->
        </div>
        
        <div id="navbar-menu" aria-labelledby="navbar-toggle">
          <ul class="navbar-links">
            <li class="navbar-item"><a class="navbar-link" href="./index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./productcalc.php">Product Calculator</a></li>
          </ul>
        </div>
      </nav>
    </header>
    

    <main style="color: #99ff33;">
      <div class="container">
        <div class="heading">
          <h1>
            Inventory ManageMent
          </h1>
        </div>
        <div class="tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home-tab-pane"
                type="button"
                role="tab"
                aria-controls="home-tab-pane"
                aria-selected="true">
                Current Inventory
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane"
                type="button"
                role="tab"
                aria-controls="profile-tab-pane"
                aria-selected="false">
                Incoming Purchase
              </button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="home-tab-pane"
              role="tabpanel"
              aria-labelledby="home-tab"
              tabindex="0">
              <div class="heading">
                <h4>Current Inventory</h4>
                <button
                  type="button"
                  onclick="clearCurrentInventory()"
                  class="btn btn-danger">
                  Clear Inventory
                </button>
              </div>
              <div class="add-item">
                <form action="#" method="post" class="form">
                  <div class="mb-3">
                    <label class="form-label">
                      Product Name:
                      <input
                        id="current_order_product_name"
                        name = "product_name"
                        class="form-control"
                        type="text"
                        required
                        value="test2"
                      />
                    </label>
                    <label class="form-label">
                      Product Brand:
                      <input
                      name = "product_brand"
                        id="current_order_product_brand"
                        class="form-control"
                        type="text"
                        required
                        value ="brand2"
                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">
                      Quantity:
                      <input
                      name = "quantity"
                        id="current_order_product_quantity"
                        class="form-control"
                        type="number"
                        min="0"
                        required
                        value="3"
                      />
                    </label>
                    <label class="form-label">
                      Product Price:
                      <input
                      name = "price"
                        id="current_order_product_price"
                        class="form-control"
                        type="text"
                        value="20.20"
                        required

                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <input
                      class="btn btn-success"
                      onclick="addCurrentInventory()"
                      type="submit">
                    </input>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
                </form>
                <!-- <?php
                
                  if (isset($message)){
                  echo "Hello";
                }
                // <div class="alert alert-success"> echo $message</div>
                ?> -->
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price (In Rs)</th>
                  </tr>
                </thead>
                <tbody id="current_inventory_list">
                  
                <?php
                $sql = 'SELECT * FROM product;';
                $res = mysqli_query($con,$sql);

                if($res && mysqli_num_rows($res) > 0)
                {
                  $counter = 1;
                  while ($row = mysqli_fetch_assoc($res)) {
                    
                    echo '
                    <tr>
                    <th scope="row">'.$counter.'</th>
                    <td>'.$row['product_name'].'</td>
                    <td>'.$row['product_brand'].'</td>
                    <td>'.$row['quantity'].'</td>
                    <td>'.$row['price'].'</td>
                    </tr>';
                    $counter++;
                  }
                } 
                ?> 
                  
                
                </tbody>
              </table>
            </div>
            <div
              class="tab-pane fade"
              id="profile-tab-pane"
              role="tabpanel"
              aria-labelledby="profile-tab"
              tabindex="0">
              <div class="heading">
                <h4>Incoming Product</h4>
                <button
                  onclick="clearIncomingOrder()"
                  type="button"
                  class="btn btn-danger">
                  Clear Incoming
                </button>
              </div>
              <div class="add-item">
                <form class="form">
                  <div class="mb-3">
                    <label class="form-label">
                      Product Name:
                      <input
                        id="incoming_order_product_name"
                        class="form-control"
                        type="text"
                        required
                      />
                    </label>
                    <label class="form-label">
                      Product Brand:
                      <input
                        id="incoming_order_product_brand"
                        class="form-control"
                        type="text"
                        required
                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">
                      Quantity:
                      <input
                        id="incoming_order_product_quantity"
                        class="form-control"
                        type="number"
                        min="0"
                        required
                      />
                    </label>
                    <label class="form-label">
                      Product Price:
                      <input
                        id="incoming_order_product_price"
                        class="form-control"
                        type="number"
                        min="0"
                        required
                      />
                    </label>
                  </div>
                  <div class="mb-3">
                    <button
                      class="btn btn-success"
                      onclick="addIncomingOrder()"
                      type="button">
                      Add
                    </button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
                </form>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price (In Rs)</th>
                  </tr>
                </thead>
                <tbody id="incoming_inventory_list">
                  <tr>
                    <th scope="row">1</th>
                    <td>Item 1</td>
                    <td>B_Name1</td>
                    <td>30</td>
                    <td>6000</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Item 2</td>
                    <td>B_Name2</td>
                    <td>25</td>
                    <td>9000</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Item 3</td>
                    <td>B_Name3</td>
                    <td>40</td>
                    <td>10500</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="copyright">
          <p>&copy; 2024 Krishak Agro.<br>All rights reserved.</p>
      </div>
    </footer>

    <script
    function addCurrentInventory() {
      const productName = document.getElementById('current_order_product_name').value;
      const productBrand = document.getElementById('current_order_product_brand').value;
      const productQuantity = document.getElementById('current_order_product_quantity').value;
      const productPrice = document.getElementById('current_order_product_price').value;
    
      if (productName && productBrand && productQuantity && productPrice) {
        const table = document.getElementById('current_inventory_list');
        const row = table.insertRow();
        const indexCell = row.insertCell(0);
        const nameCell = row.insertCell(1);
        const brandCell = row.insertCell(2);
        const quantityCell = row.insertCell(3);
        const priceCell = row.insertCell(4);
    
        indexCell.textContent = table.rows.length;
        nameCell.textContent = productName;
        brandCell.textContent = productBrand;
        quantityCell.textContent = productQuantity;
        priceCell.textContent = productPrice;
    
        Clear the input fields
        document.getElementById('current_order_product_name').value = '';
        document.getElementById('current_order_product_brand').value = '';
        document.getElementById('current_order_product_quantity').value = '';
        document.getElementById('current_order_product_price').value = '';
      } else {
        alert('Please fill in all the required fields.');
      }
    }
    
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="main.js"></script>
  </body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
   
   $query = 'INSERT INTO product values ("'.$name.'", "'.$brand.'", '.$qty.', '.$price.');';
  
   $result = mysqli_query($con,$query);
    // if($result){
    //   $message = "Product Added Successfully";
    // }
  }
?>