<html>

<head></head>

<body>
    <form method="POST" id="rform" action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="text" name="key_id" value="rzp_test_aDNW3jpLU7vwbQ">
        <input type="text" name="name" value="Fetus Charm">
        <input type="text" name="amount" value="50000">
        <input type="text" name="description" value="Fetus Charm">
        <input type="text" name="prefill[name]" value="Dhruvi">
        <input type="text" name="prefill[contact]" value="9328152279">
        <input type="text" name="prefill[email]" value="dhruvipastagia2001@gmail.com">
        <!--Address changes-->
        <input type="text" name="notes[shipping address]" value="India">
        <input type="text" name="notes[shipping address]" value="Gujarat">
        <input type="text" name="notes[shipping address]" value="Surat">
        <input type="text" name="notes[shipping address]" value="395009">
        <input type="text" name="notes[shipping address]" value="Address">
        <input type="text" name="notes[shipping address]" value="">

        <!-- <input type="text" name="notes[shipping address]" value="">-->
        <input type="text" name="callback_url">
        <input type="text" name="cancel_url">
        <button type="submit" id="btnsubmit">Submit</button>
    </form>
</body>

</html>