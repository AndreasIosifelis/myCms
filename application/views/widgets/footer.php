            </div>
        </div>
        
        <?php $this->load->view("widgets/generalWaitModal"); ?>
        <script>
            $(function(){
                cms.formSubmit();
                console.log($("#sessionId").val());
            });
            $(document).foundation({
                orbit: {
                    animation: "fade",
                    bullets: false,
                    navigation_arrows: false,
                    pause_on_hover: false,
                    slide_number: false
                },
                top_bar:{
                    custom_back_text: true,
                    back_text: "Πίσω"
                }
                
            });
        </script>
    </body>
</html>


