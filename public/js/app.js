//Add to Cart

let addToCartCost = 0;

function updateCart(){
    document.querySelector("#addToCartCost").innerText = addToCartCost.toFixed(2);
}

function addItemToCartCost(price){
    addToCartCost += parseFloat(price);
    updateCart();
}

// Show Image Modal

function showImageModal(image_url){
    document.querySelector("#modalImage").src = image_url;
}