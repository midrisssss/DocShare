<div id="loader"
    class="fixed z-50 top-1/2 left-1/2 w-10 h-10 bg-none transition-all border-8 border-white border-t-blue rounded-full animate-spin">
</div>
<script>
    let loader = document.getElementById("loader");
    let backgroundLoading = document.getElementById("background");

    window.addEventListener("load", () => {
        loader.classList.remove("hidden");
        backgroundLoading.classList.remove("hidden");
    });

    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(function () {
            loader.classList.add("hidden");
            backgroundLoading.classList.add("hidden");
        }, 300);
    });
</script>