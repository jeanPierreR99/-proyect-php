let list = JSON.parse(localStorage.getItem("carrito"));
console.log(list)



//remove
function createColumnRemove(ref){
    let td = document.createElement('td');
    let i = document.createElement('i');
    i.className = "far fa-times-circle";
    let link = document.createElement('a');
    link.href = `#/${ref}`;
    i.appendChild(link);
    td.appendChild(i);
    return td;
}

//image
function createColumnImage(urlImage){
    let tdImage = document.createElement('td');
    let img = document.createElement('img');
    img.src = `uploads/${urlImage}`;
    tdImage.appendChild(img);
    return tdImage;
}

//product 
function createColumnProduct(text){
    let tdProduct = document.createElement('td');
    tdProduct.textContent = text
    return tdProduct;
}

//cantidad
function createColumnTD(number){
    let td = document.createElement('td');
    td.textContent = `${number}`;
    return td;
}

for(let i=0;i<list.length;i++){
    let tr =document.createElement('tr');
    tr.appendChild(createColumnRemove(list[i].id));
    tr.appendChild(createColumnImage(list[i].url_image));
    tr.appendChild(createColumnProduct(list[i].matiral));
    tr.appendChild(createColumnTD(2));
    tr.appendChild(createColumnTD(list[i].price));
    tr.appendChild(createColumnTD((list[i].price*2)));
    document.getElementById('rows-cart-storage').appendChild(tr);   
}

