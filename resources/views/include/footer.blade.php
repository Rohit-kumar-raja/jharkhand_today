<style>
    .style-footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 40px;
        padding-top: -10px;
        margin-bottom: 1px;
    }
</style>
<footer class="bg-primary  rounded shadow p-2 style-footer">
    <p class="mb-0 text-center text-white "> Copyright©{{ date('Y')}}-<a class=" text-success fw-normal"
            href="#" target="_blank"> {{env('APP_NAME')}}
            </a> Powered By <a class="text-info" href="https://togoteams.com/"> Togo Teams</a></p>

</footer>
