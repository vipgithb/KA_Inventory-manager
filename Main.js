function is_empty(string) {
    if (string.length == 0) {
        return true;
    }
    return false;
}

function getIndex(tbody) {
    let index = tbody.children.length || 0;
    return index;
}

function clearCurrentInventory() {
    document.querySelector("#current_inventory_list").innerHTML = "";
}

function clearIncomingOrder() {
    document.querySelector("#incoming_inventory_list").innerHTML = "";
}

function addCurrentInventory() {
    let productName = document.querySelector("#current_order_product_name").value;
    let productBrand = document.querySelector("#current_order_product_brand").value;
    let productPrice = document.querySelector("#current_order_product_price").value;
    let productQuantity = document.querySelector("#current_order_product_quantity").value;
    let productDate = document.querySelector("#current_order_product_date").value

    if (
        is_empty(productName) ||
        is_empty(productBrand) ||
        is_empty(productPrice) ||
        is_empty(productQuantity)||
        is_empty(productDate)
    ) {
        alert("Please fill out all fields");
        return;
    }

    let tbody = document.querySelector("#current_inventory_list");

    let tr = `<tr>
    <th scope='row'>${getIndex(tbody) + 1}</th>
    <td>${productName}</td>
    <td>${productBrand}</td>
    <td>${productQuantity}</td>
    <td>${productPrice}</td>
    <td>${productDate}</td>`;

    tbody.innerHTML += tr;
}
