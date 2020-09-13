let container = document.getElementById('chosenMeal');
let hiddenDiv = document.getElementById('hiddenDiv');
let addToCart = document.getElementById('addToCart');
let clear = document.getElementById('clearAll');

function createMeal(){
    let select = document.getElementById('select');
    let y = select.options[select.selectedIndex];

    let p = document.createElement('p');
    p.innerHTML = y.innerHTML;
    p.classList.add('addedMealP');
    p.setAttribute('id', y.innerText);
    p.style.display = 'inline';
    
    let remove = document.createElement('button');
    remove.classList.add('remove', 'btn', 'btn-danger');
    remove.innerHTML = 'REMOVE';
    remove.onclick = function (){
        container.removeChild(divBox);
    }
    
    let divBox = document.createElement('div');
    divBox.classList.add('addedMealP'); 
    divBox.setAttribute('id', y.innerText);
    divBox.appendChild(p);
    divBox.appendChild(remove);

    container.appendChild(divBox);
}

addToCart.addEventListener('click', function(){
    hiddenDiv.classList.remove('hidden');
});
addToCart.addEventListener('click', createMeal);


clear.addEventListener('click', function(){
    while(container.firstChild){
        container.removeChild(container.firstChild);
        hiddenDiv.classList.add('hidden');
    }
})