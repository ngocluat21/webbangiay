// Minus & Plus amount
// Button plus - minus
// let amountElement = document.getElementById('amount');
// let amount = amountElement.value;
// let render = (amount) => {
//     amountElement.value = amount;
// }
// // Handle Plus
// let handlePlus = () => {
//     amount++;
//     render(amount);
// }

// // Handle Minus
// let handleMinus = () => {
//     if (amount > 1)
//         amount --;
//     render(amount);
// }

// amountElement.addEventListener('input', () => {
//     amount = amountElement.value;
//     amount = parseInt(amount);
//     amount = (isNaN(amount)||amount==0)?1:amount;
//     render(amount);
// }); 


// document.addEventListener("DOMContentLoaded", function() {
//     const remoteContainer = document.getElementById("remoteContainer");
//     const numberOfPairs = 5; // Thay đổi số lượng cặp nếu cần

//     function createQuantitySelectorPair(index) {
//         const container = document.createElement("div");
//         container.innerHTML = `
//             <button class="minus-btn" onclick="handleMinus(${index})"><i class="fa fa-minus"></i></button>
//             <input type="number" name="amount${index}" id="amount${index}" value="1">
//             <button class="plus-btn" onclick="handlePlus(${index})"><i class="fa fa-plus"></i></button>
//         `;
//         remoteContainer.appendChild(container);
//     }

//     // Tạo các cặp nút "minus" và "plus"
//     for (let i = 1; i <= numberOfPairs; i++) {
//         createQuantitySelectorPair(i);
//     }
// });

// function handleMinus(index) {
//     const amountInput = document.getElementById(`amount${index}`);
//     let currentValue = parseInt(amountInput.value, 10);

//     if (currentValue > 1) {
//         currentValue--;
//         amountInput.value = currentValue;
//     }
// }

// function handlePlus(index) {
//     const amountInput = document.getElementById(`amount${index}`);
//     let currentValue = parseInt(amountInput.value, 10);

//     currentValue++;
//     amountInput.value = currentValue;
// }


// Sản phẩm biến thể
// let variantCount = 1;

// function createVariantInput() {
//     return `
//         <div class="variant">
//             <select name="" id="">
//                 <option value=""></option>
//             </select>
//             <select name="" id="">
//                 <option value=""></option>
//             </select>
//             <input type="number" name="soluong" placeholder="Giá biến thể" required>
//         </div>
//     `;
// }

// function addVariant() {
//     const variantContainer = document.getElementById('variant_container');
//     const variantDiv = document.createElement('div');
//     variantDiv.className = 'variant';
//     variantDiv.innerHTML = createVariantInput();

//     variantContainer.appendChild(variantDiv);
// }

// Hàm thêm biến thể mới
// function addVariant() {
//     var variantsContainer = document.getElementById('variantsContainer');
//     var newVariant = document.querySelector('.variant').cloneNode(true);
//     variantsContainer.appendChild(newVariant);
// }
// function removeVariant(input) {
//     var variant = input.parentNode;
//     variant.parentNode.removeChild(variant);
// }
// function removeVariant(button) {
//     var variantsContainer = document.getElementById('variantsContainer');
//     var variant = button.parentNode;
//     variantsContainer.removeChild(variant);
// }
// Hàm thêm biến thể mới
function addVariant() {
    var variantsContainer = document.getElementById('variantsContainer');
    var newVariant = document.querySelector('.variant').cloneNode(true);
    variantsContainer.appendChild(newVariant);
}

// // Hàm xóa biến thể
// function removeVariant(element) {
//     var variantsContainer = document.getElementById('variantsContainer');
//     variantsContainer.removeChild(element.parentNode);
// }


function removeVariant(button) {
    // Tìm phần tử cha (div.variant) của nút đã được nhấn
    var variantDiv = button.closest('.variant');
    
    // Kiểm tra nếu có phần tử cha, sau đó xóa nó
    if (variantDiv) {
      variantDiv.remove();
    }
  }

//   function addVariant() {
//     // Tạo một đối tượng div.variant mới
//     var newVariant = document.createElement('div');
//     newVariant.classList.add('variant', 'grid3', 'raw');

//     // ...Thêm các thành phần khác vào div.variant mới ở đây...

//     // Thêm div.variant mới vào body hoặc container mong muốn
//     document.body.appendChild(newVariant);
//   }



// Số lượng
// function increaseQuantity() {
//     var quantityInput = document.getElementById('quantity');
//     var currentQuantity = parseInt(quantityInput.value);
//     quantityInput.value = currentQuantity + 1;
// }

// function decreaseQuantity() {
//     var quantityInput = document.getElementById('quantity');
//     var currentQuantity = parseInt(quantityInput.value);
    
//     // Đảm bảo số lượng không bao giờ âm
//     if (currentQuantity > 1) {
//         quantityInput.value = currentQuantity - 1;
//     }
// }

// function updateDisplayQuantity() {
//     var quantityInput = document.getElementById('quantity');
//     var displayQuantity = document.getElementById('displayQuantity');
//     displayQuantity.textContent = quantityInput.value;
// }

// function increaseQuantity() {
//     var quantityInput = document.getElementById('quantity');
//     var currentQuantity = parseInt(quantityInput.value);
//     quantityInput.value = currentQuantity + 1;
//     updateDisplayQuantity();
// }

// function decreaseQuantity() {
//     var quantityInput = document.getElementById('quantity');
//     var currentQuantity = parseInt(quantityInput.value);
    
//     // Đảm bảo số lượng không bao giờ âm
//     if (currentQuantity > 1) {
//         quantityInput.value = currentQuantity - 1;
//         updateDisplayQuantity();
//     }
// }
document.addEventListener('click', function(event) {
    var target = event.target;

    // Kiểm tra xem có phải là nút tăng hoặc giảm không
    if (target.classList.contains('increase') || target.classList.contains('decrease')) {
        // Tìm đến phần tử cha có class 'quantity-container'
        var container = target.closest('.quantity-container');

        // Lấy ô nhập số lượng bên trong container
        var inputElement = container.querySelector('.quantitybtn');
        var currentValue = parseInt(inputElement.value);

        // Xử lý tăng hoặc giảm giá trị
        if (target.classList.contains('increase')) {
            inputElement.value = currentValue + 1;
        } else {
            // Đảm bảo giá trị không nhỏ hơn 1
            if (currentValue > 1) {
                inputElement.value = currentValue - 1;
            }
        }
    }
});