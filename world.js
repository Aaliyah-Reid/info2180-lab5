
document.addEventListener('DOMContentLoaded', function() {
    const lookupBtn = document.getElementById('lookup');

    lookupBtn.addEventListener('click', function(){

        const country = document.getElementById('country').value;

        fetch(`http://localhost/info2180-lab5/world.php?country=${country}`)

            .then(response => response.text())
            .then(data => {
                const resultDiv = document.getElementById('result');

               
                const dataDiv = document.createElement('div');
                dataDiv.innerHTML = data; // Set the fetched data as HTML content

                resultDiv.innerHTML = '';

                resultDiv.appendChild(dataDiv);
            })
            .catch(error => {
                console.error('Error:', error);
            });

    });
});
