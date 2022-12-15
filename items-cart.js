let list = JSON.parse(localStorage.getItem("carrito"));
console.log(list)

function dropItem(idObjStorage){
    let newList = [];
    let noSaveIndex = 0;
    let sizeArray = list.length;
    for(let i=0;i<sizeArray;i++){
        if(list[0].id == idObjStorage){
            noSaveIndex = i;
            break;
        }
    }
    for(let i=0;i<sizeArray;i++){
        if(noSaveIndex == i){
            continue;
        }
        newList.push(list[i])
    }
    return newList;
}



//remove
let positionDrop = "none";
const tableID = document.getElementById('rows-cart-storage');
function createColumnRemove(ref,idListStorage){
    let td = document.createElement('td');
    let i = document.createElement('i');
    i.className = "far fa-times-circle";
    let link = document.createElement('a');
    link.href = `#/${ref}`;

    i.appendChild(link);
    i.className = i.className +" delete-item";
    // i.addEventListener('click',()=>{
    //     console.log('remove',ref)
    //     // rowID.removeChild(rowID.children[idListStorage]);
    //     // let newlist = [...dropItem(idListStorage)]
    //     console.log(document.getElementById('rows-cart-storage').rows)
    //     // localStorage.setItem("carrito",JSON.stringify(newlist))
    //     // console.log(newlist)
    //     // createListTable()
    // })
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

function createListTable(){
    document.getElementById('rows-cart-storage').innerHTML = '';
    for(let i=0;i<JSON.parse(localStorage.getItem("carrito")).length;i++){
        let tr =document.createElement('tr');
        tr.appendChild(createColumnRemove(list[i].id,i));
        tr.appendChild(createColumnImage(list[i].url_image));
        tr.appendChild(createColumnProduct(list[i].name));
        tr.appendChild(createColumnTD(list[i].price));
        document.getElementById('rows-cart-storage').appendChild(tr);   
    }
}


let dropTR = document.getElementsByClassName("delete-item")
// for (const tr of dropTR) {
//     tr.addEventListener('click', function onClick() {
//       console.log('id json => ',tr.children[0].attributes[0].value[2]);
//       console.log('id json => ',dropTR);
//     });
//   }
function createEventsDeleteTable(){
    for(let i=0;i<dropTR.length;i++){

        dropTR[i].addEventListener('click', function onClick() {
            let indexObjStorage = dropTR[i].children[0].attributes[0].value[2];
            console.log('id json => ',indexObjStorage);
            console.log('id json => ',dropTR[i]);
            list = [...dropItem(indexObjStorage)]
            localStorage.setItem("carrito",JSON.stringify(list))
            createListTable()
            createEventsDeleteTable();
        //   dropTR[i].remove
        //   positionDrop = i;
            console.log(positionDrop)
        });
    };
}

createListTable();
createEventsDeleteTable();

//-------------------------------------------send data cart

function getSubtotal(){
    let subtotal = 0;
    for(let i=0;i<list.length;i++){
        subtotal = subtotal + parseFloat(list[i].price);
    }
    return subtotal;
}

total.textContent = getSubtotal();


let btnPedir = document.getElementById('btn-send-data-cart');
btnPedir.addEventListener('click',async (e)=>{
    e.preventDefault()
    console.log("se enio")
    let response = await fetch('http://localhost/dora/query/products/api-post.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(list)
        // body: list
    })
    let hola = await response.json();
    // console.log(response)
    console.log(hola)
})