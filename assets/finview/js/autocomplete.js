let availableKeywords = ['Çiçek Sepeti', 'Pera Tur', 'Karagöz Medya', 'Doğan Demirel', 'Doğan Demirel 2'];
$(document).ready(function () {
    const inputBox = $("#input-box");
    const resultBox = $(".result-box");

    inputBox.on("input", function () {
        const input = $(this).val().toLowerCase();
        const result = availableKeywords.filter(keyword => keyword.toLowerCase().includes(input));
        display(result);
    });
    function display(result) {
        const content = result.map(list => `<li>${list}</li>`);
        resultBox.html(`<ul>${content.join('')}</ul>`).toggleClass("active", result.length > 0);
        resultBox.find("ul li").on("click", function () {
            selectInput($(this).text());
        });
        $(document).on("click", function () {
            resultBox.removeClass("active").html('');
        });
    }
    function selectInput(selectedItem) {
        inputBox.val(selectedItem);
        resultBox.removeClass("active").html('');
    }
});



let availableKeywords2 = ['Çiçek Sepeti', 'Pera Tur', 'Karagöz Medya', 'Doğan Demirel', 'Doğan Demirel 2'];
$(document).ready(function () {
    const inputBox2 = $("#input-box2");
    const resultBox2 = $(".result-box2");

    inputBox2.on("input", function () {
        const input = $(this).val().toLowerCase();
        const result = availableKeywords2.filter(keyword => keyword.toLowerCase().includes(input));
        display(result);
    });
    function display(result) {
        const content = result.map(list => `<li>${list}</li>`);
        resultBox2.html(`<ul>${content.join('')}</ul>`).toggleClass("active", result.length > 0);
        resultBox2.find("ul li").on("click", function () {
            selectInput($(this).text());
        });

        $(document).on("click", function () {
            resultBox2.removeClass("active").html('');
        });
    }
    function selectInput(selectedItem) {
        inputBox2.val(selectedItem);
        resultBox2.removeClass("active").html('');
    }
});

