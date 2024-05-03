// Script efecto "Soy" 

const textArray = ["FullStack Developer", "Apasionado por el desarrollo", "Entusiasta del hardware"];
        let count = 0;
        const dynamicText = document.getElementById("dynamic-text");

        function type() {
            const currentText = textArray[count];
            dynamicText.textContent = currentText;
            dynamicText.classList.remove("fade-out");
            dynamicText.classList.add("fade-in-out");

            setTimeout(function() {
                dynamicText.classList.remove("fade-in-out");
                dynamicText.classList.add("fade-out");

                setTimeout(function() {
                    count = (count + 1) % textArray.length;
                    type();
                }, 1000); 
            }, 3000); 
        }
        type();