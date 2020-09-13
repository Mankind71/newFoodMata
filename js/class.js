let container = document.getElementById('chosenMeal');
let hiddenDiv = document.getElementById('hiddenDiv');
let addToCart = document.getElementById('addToCart');
let clearAll = document.getElementById('clearAll');
let kitname = document.getElementById('some');
let hiddenkitname = document.getElementById('hiddenName');
// hiddenkitname.style.display='inline';
let select = document.querySelector('#select');

if(localStorage.getItem("order") == undefined){
    let order = [];
    localStorage.setItem("order", JSON.stringify(order));
}

let orderEX = localStorage.getItem("order");
let order = JSON.parse(orderEX);

class Meal{
    constructor(name){
        this.createMeal(name);
    }
    createMeal(name){
        // let y = select.options[select.selectedIndex];

        let h4 = document.createElement('h4');
        h4.style.display = 'inline';
        h4.innerText = kitname.innerText; 

        let hiddenSpan = document.createElement('span');
        hiddenSpan.innerHTML = hiddenkitname.innerHTML;
        
        let kitSpan = document.createElement('span');
        kitSpan.innerHTML = name.innerHTML;
        
        let p = document.createElement('p');
        p.classList.add('addedMealP');
        p.setAttribute('id', name.innerText);
        p.style.display = 'inline';
        p.appendChild(hiddenSpan);
        p.appendChild(h4);
        p.appendChild(kitSpan);
        
        let remove = document.createElement('button');
        remove.classList.add('remove', 'btn', 'btn-danger');
        remove.innerHTML = 'REMOVE';
        remove.addEventListener('click', () => this.remove(divBox, name)); 
        
        let divBox = document.createElement('div');
        divBox.classList.add('addedMealP'); 
        divBox.setAttribute('id', name.innerText);
        divBox.appendChild(p);
        divBox.appendChild(remove);

        container.appendChild(divBox);
    }
    remove(divBox, name){
        let x = order.indexOf(name.innerText);
        container.removeChild(divBox);
        order.splice(x,1);
        localStorage.setItem("order", JSON.stringify(order));
    }
    
}

addToCart.addEventListener('click', function(){
    hiddenDiv.classList.remove('hidden');
});

addToCart.addEventListener('click', create);

function create(){
    new Meal(select.options[select.selectedIndex]);
    order.push(select.options[select.selectedIndex]);
    localStorage.setItem("order",JSON.stringify(order));
}

for (let v=0; v < order.length; v++){
    new Meal(order[v]);
}

clearAll.addEventListener('click', function(){
    hiddenDiv.classList.add('hidden');
    while(container.firstChild){
        container.removeChild(container.firstChild);
        order = [];
        localStorage.setItem("order", JSON.stringify(order));
    }
})