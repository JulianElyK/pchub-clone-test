<div class="footer">
    @php
        if($title == "PCHub"){
            echo '<div class="footer-content footer-dark">';
        }
        else{
            echo '<div class="footer-content footer-light">';
        }
    @endphp
        <div class="footer-content-left">
            ABOUT PC HUB
        </div>

        <div class="footer-content-right">
            <ul>
                <li>&copy; PC HUB INC. ALL RIGHTS RESERVED</li>
                <li>TERMS AND PRIVACY</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

@php
    if($title == "PCHub"){
        echo '<body style="background-color: #000">';
    }
    else{
        echo '<body style="background-color: #fff">';
    }
@endphp