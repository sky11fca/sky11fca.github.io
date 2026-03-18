fetch('./pub/persistance/furniture.json')
    .then(response => response.json())
    .then(data => {
        const furnGrid = document.getElementById("furniture-grid");
        data.forEach(item => {
            furnGrid.innerHTML += `<div>
                <img src="${item.url}" alt="${item.placeholder}">
                <h3>${item.name}</h3>
                <p>Price: $${item.price}</p>
            </div>`;
        });
    })
    .catch(error => console.error("Error loading furniture data:", error));