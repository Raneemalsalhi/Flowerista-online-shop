
let cartItem = document.querySelector('.sidebar');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    searchForm.classList.remove('active');
}


let closeCart = document.querySelector('.close');

document.querySelector('.close').onclick = () =>{
    cartItem.classList.remove('active');
}


const product = [
    {
        "id": 1,
        "price": 17,
        "image": "images/img-1.jpg",
    },
    {
        "id": 2,
        "price": 13,
        "image": "images/img-2.jpg",
    },
    {
        "id": 3,
        "price": 14,
        "image": "images/img-3.jpg",
    },
     {
        "id": 4,
        "price": 12,
        "image": "images/img-4.jpg",
    },
    {
        "id": 5,
        "price": 14,
        "image": "images/img-5.jpg",
    },
       {
        "id": 6,
        "price": 18,
        "image": "images/img-6.jpg",
    },
    {
        "id": 7,
        "price": 15,
        "image": "images/img-7.jpg",
    },
    {
        "id": 8,
        "price": 17,
        "image": "images/img-8.jpg",
    },
    {
        "id": 9,
        "price": 11,
        "image": "images/img-9.jpg",
    },    
    {
        "id": 10,
        "price": 11,
        "image": "images/img-10.jpg",
    },    {
        "id": 11,
        "price": 17,
        "image": "images/img-11.jpg",
    },   {
        "id": 12,
        "price": 15.99,
        "image": "images/img-12.jpg",
    }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image,  price} = item;
        return(
        `<div class='box'>
            <div class='image'>
                <img class='images' src=${image}></img>
            </div>
        <div class='content'>
        <h2> ${price}.00 RO</h2>`+
        "<button class='cart-btn' onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`



    )
        }).join('')
var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        
        document.getElementById("total").innerHTML = 0+".00"+"RO";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = total+".00"+"RO";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p >                   </p>
                <h2 style='font-size: 15px;'> ${price}.00RO</h2>`+
                "<i class='' onclick='delElement("+ (j++) +")'>X</i></div>"
            );
        }).join('');
    }

    
}