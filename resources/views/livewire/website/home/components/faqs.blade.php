{{-- mainRow --}}
<div class="row ">
    <div class="col-12">
        <div class="faq-main-box">
            <div class="row align-items-start">



                {{-- tabLinks --}}
                <div class="col-lg-3 mb-4 mb-lg-0  col-12">
                    <div class="faq-category-box">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">


                            {{-- general --}}
                            <button class="nav-link active text-uppercase fw-bold" id="v-pills-general-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab"
                                aria-controls="v-pills-general" aria-selected="true">General</button>


                            {{-- delivery --}}
                            <button class="nav-link text-uppercase fw-bold" id="v-pills-delivery-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-delivery" type="button" role="tab"
                                aria-controls="v-pills-delivery" aria-selected="false">Delivery</button>



                            {{-- service --}}
                            <button class="nav-link text-uppercase fw-bold" id="v-pills-service-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-service" type="button" role="tab"
                                aria-controls="v-pills-service" aria-selected="false">Service</button>


                            {{-- planSubscription --}}
                            <button class="nav-link text-uppercase fw-bold" id="v-pills-plan-subscription-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-plan-subscription" type="button"
                                role="tab" aria-controls="v-pills-plan-subscription" aria-selected="false">Plan
                                Subscription</button>
                        </div>
                    </div>
                </div>






                {{-- --------------------------- --}}
                {{-- --------------------------- --}}







                {{-- content --}}
                <div class="col-lg-9  col-12">
                    <div class="faq-accodain-box">
                        <div class="tab-content" id="v-pills-tabContent">





                            {{-- 1: generalTab --}}
                            <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel"
                                aria-labelledby="v-pills-general-tab" tabindex="0">
                                <div class="accordion" id="generalAccordian">


                                    {{-- item --}}
                                    <div class="accordion-item">



                                        {{-- heading --}}
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Are the meal plans suitable for specific dietary needs or
                                                fitness goals?
                                            </button>
                                        </h2>



                                        {{-- content --}}
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#generalAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    Yes, our meal plans are designed to cater to your needs
                                                    and preferences, such as weight loss or low carb, weight
                                                    maintenance, weight gain, high protein, and vegetarian.
                                                    You can select the plan that aligns with your dietary
                                                    restrictions or preferences to ensure your meals are
                                                    tailored to your specific requirements.
                                                </p>
                                            </div>
                                        </div>
                                    </div>







                                    {{-- item --}}
                                    <div class="accordion-item">


                                        {{-- heaidng --}}
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How to ensure appropriate food nutrition and calories for my
                                                meal plans?
                                            </button>
                                        </h2>


                                        {{-- content --}}
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#generalAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    Our specialized team of dietitians and chefs work
                                                    closely to prepare your personalized meals. They
                                                    carefully pay attention to your fitness goals (such as,
                                                    weight loss) to ensure you are in a calorie deficit.
                                                    Chefs adjust your meals as needed, with guidance from a
                                                    dietitian if necessary.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- endItem --}}









                                    {{-- item --}}
                                    <div class="accordion-item">


                                        {{-- heading --}}
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                What are the benefits of Aleen’s meal plan?
                                            </button>
                                        </h2>



                                        {{-- content --}}
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#generalAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    Aleen's ensures that your journey toward healthy living
                                                    becomes stress-free. We support you in your busiest
                                                    lifestyle by delivering fresh, chef-prepared, and
                                                    delicious meals at your doorstep. We shop, prepare your
                                                    food with the guidance of the dietitian team, calculate
                                                    calories, and deliver your food. Our specialized
                                                    dietitians ensure that your meals are aligned with your
                                                    meal plans and fitness goals. You get the benefits of
                                                    clean eating without investing your time and energy into
                                                    shopping and preparation and still get the most
                                                    delicious and healthy meals at your table. So, you look
                                                    amazing, while focusing on your work. Additionally, you
                                                    can take advantage of our expert nutritionist team to
                                                    crush your health and fitness goals with our nutrition
                                                    coaching program.
                                                </p>
                                            </div>
                                        </div>
                                    </div>








                                    {{-- item --}}
                                    <div class="accordion-item">



                                        {{-- heading --}}
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                What if I have intolerance or allergies for some
                                                ingredients?
                                            </button>
                                        </h2>


                                        {{-- content --}}
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#generalAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    During your subscription, you can indicate any food
                                                    intolerances or allergies, and we'll ensure your meals
                                                    exclude them. While using the app to select meals,
                                                    you'll receive notifications next to dishes containing
                                                    your dislikes, which will be omitted. Please note that
                                                    we are unable to accommodate life-threatening allergies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endTab --}}










                            {{-- -------------------------- --}}
                            {{-- -------------------------- --}}





                            {{-- 2: deliveryTab --}}
                            <div class="tab-pane fade" id="v-pills-delivery" role="tabpanel"
                                aria-labelledby="v-pills-delivery-tab" tabindex="0">
                                <div class="accordion" id="deliveryAccordian">


                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#deliverycollapseOne"
                                                aria-expanded="false" aria-controls="deliverycollapseOne">
                                                Can I cancel my subscription?
                                            </button>
                                        </h2>
                                        <div id="deliverycollapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#deliveryAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    If you wish to cancel your subscription you can avail
                                                    the option in first 6 days. You will get a refund amount
                                                    for the undelivered days. After the initial 6 days, you
                                                    cannot get a refund but you can transfer your days to a
                                                    family member or friend.
                                                </p>
                                            </div>
                                        </div>
                                    </div>








                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#deliverycollapseTwo"
                                                aria-expanded="false" aria-controls="deliverycollapseTwo">
                                                Am I locked into a contract?
                                            </button>
                                        </h2>
                                        <div id="deliverycollapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#deliveryAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    No, you are not locked into a contract. You can skip or
                                                    pause your subscription if required, so you have
                                                    complete control over your plan.
                                                </p>
                                            </div>
                                        </div>
                                    </div>






                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#deliverycollapseThree"
                                                aria-expanded="false" aria-controls="deliverycollapseThree">
                                                How long do my meals last?
                                            </button>
                                        </h2>
                                        <div id="deliverycollapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#deliveryAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    There is an expiry date printed on the meal labels.
                                                    Usually, our meals last 48 hrs. in the fridge.
                                                </p>
                                            </div>
                                        </div>
                                    </div>






                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#deliverycollapseFour"
                                                aria-expanded="false" aria-controls="deliverycollapseFour">
                                                Do you accommodate allergies?
                                            </button>
                                        </h2>
                                        <div id="deliverycollapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#deliveryAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    We accommodate food intolerance and allergies but not
                                                    severe allergies. Limited to 3 exclusions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endTab --}}









                            {{-- -------------------------- --}}
                            {{-- -------------------------- --}}










                            {{-- 3: servicesTab --}}
                            <div class="tab-pane fade" id="v-pills-service" role="tabpanel"
                                aria-labelledby="v-pills-service-tab" tabindex="0">
                                <div class="accordion" id="serviceAccordian">



                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#servicecollapseOne"
                                                aria-expanded="false" aria-controls="servicecollapseOne">
                                                What services does Aleen’s offer?
                                            </button>
                                        </h2>
                                        <div id="servicecollapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#serviceAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    We offer a wide range of meal plans to cater to your
                                                    specific needs. Whether you're focused on wellness,
                                                    weight loss, vegetarian, high protein diet, or weight
                                                    gain, we've got you covered. Our goal is to provide
                                                    delicious, nutritious, and customized meal plans to
                                                    support your unique goals
                                                </p>
                                            </div>
                                        </div>
                                    </div>




                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#servicecollapseTwo"
                                                aria-expanded="false" aria-controls="servicecollapseTwo">
                                                What types of meal plans do you offer for wellness and
                                                weight loss?
                                            </button>
                                        </h2>
                                        <div id="servicecollapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#serviceAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    We offer a variety of meal plans designed for wellness
                                                    and weight loss. Our plans include balanced meals with a
                                                    focus on nutritious ingredients and controlled portion
                                                    sizes. Whether you're looking for a low-carb,
                                                    gluten-free, or dairy-free option, we have a plan that
                                                    can help you achieve your goals while enjoying delicious
                                                    flavors.
                                                </p>
                                            </div>
                                        </div>
                                    </div>





                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#servicecollapseThree"
                                                aria-expanded="false" aria-controls="servicecollapseThree">
                                                Do you have a meal plan specifically designed for
                                                vegetarians?
                                            </button>
                                        </h2>
                                        <div id="servicecollapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#serviceAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    Yes, we do! We understand the importance of catering to
                                                    different dietary preferences and needs. Our vegetarian
                                                    meal plan is carefully crafted with an assortment of
                                                    plant-based protein sources, seasonal vegetables, and
                                                    grains to provide a well-rounded and satisfying
                                                    experience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>





                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#servicecollapseFour"
                                                aria-expanded="false" aria-controls="servicecollapseFour">
                                                Can I customize my meal plan?
                                            </button>
                                        </h2>
                                        <div id="servicecollapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#serviceAccordian">
                                            <div class="accordion-body">
                                                <p>
                                                    Absolutely! We understand that everyone has different
                                                    preferences and dietary requirements. That's why our
                                                    meal plans are fully customizable. Whether you have
                                                    specific food allergies, dietary restrictions, or
                                                    personal preferences, we can tailor your meal plan to
                                                    ensure it fits your needs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endTab --}}











                            {{-- -------------------------- --}}
                            {{-- -------------------------- --}}









                            {{-- 4: planTab --}}
                            <div class="tab-pane fade" id="v-pills-plan-subscription" role="tabpanel"
                                aria-labelledby="v-pills-plan-subscription-tab" tabindex="0">
                                <div class="accordion" id="planAccordina">



                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#plancollapseOne"
                                                aria-expanded="false" aria-controls="plancollapseOne">
                                                How do I sign up and get started?
                                            </button>
                                        </h2>
                                        <div id="plancollapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#planAccordina">
                                            <div class="accordion-body">
                                                <p>
                                                    You can click on the Sign-Up button at the top
                                                    right-hand corner. Then, select the best meal plan as
                                                    per your diet goals and dietary preferences, followed by
                                                    the number of meals you need each and the number of days
                                                    for which you need the plan. Once you have selected the
                                                    appropriate meal plan, select your delivery day, mention
                                                    delivery details, and payment information at check out.
                                                    Now, you can download our app and log in to select your
                                                    meals, taking control at your fingertips.
                                                </p>
                                            </div>
                                        </div>
                                    </div>






                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#plancollapseTwo"
                                                aria-expanded="false" aria-controls="plancollapseTwo">
                                                Can I order meals through the app, or do I need to cook
                                                everything myself?
                                            </button>
                                        </h2>
                                        <div id="plancollapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#planAccordina">
                                            <div class="accordion-body">
                                                <p>
                                                    The app primarily focuses on helping you get healthy
                                                    meals at your home, so you don’t need to prepare them
                                                    yourself. You can explore our "Meal Delivery" section to
                                                    see if this service is available in your area. This
                                                    option allows you to enjoy chef-prepared, healthy meals
                                                    delivered to your doorstep for added convenience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>







                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#plancollapseThree"
                                                aria-expanded="false" aria-controls="plancollapseThree">
                                                Can I make changes to my online order after it has been
                                                placed?
                                            </button>
                                        </h2>
                                        <div id="plancollapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#planAccordina">
                                            <div class="accordion-body">
                                                <p>
                                                    We understand that plans may change, and we do our best
                                                    to accommodate any modifications to your order. Simply
                                                    give our customer service team a call as soon as
                                                    possible, and they will assist you in making the
                                                    necessary changes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>







                                    {{-- item --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#plancollapseFour"
                                                aria-expanded="false" aria-controls="plancollapseFour">
                                                How do I contact customer service if I have a question about
                                                my order?
                                            </button>
                                        </h2>
                                        <div id="plancollapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#planAccordina">
                                            <div class="accordion-body">
                                                <p>
                                                    We have a dedicated customer service team ready to
                                                    assist you. You can reach out to them via phone or
                                                    email. Our contact information can be found on our
                                                    website under the "Contact Us" section. We're here to
                                                    provide any answers or assistance you need.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endTab --}}

                        </div>
                    </div>
                </div>
                {{-- end rightCol --}}

            </div>
        </div>
    </div>
</div>
{{-- endRow --}}