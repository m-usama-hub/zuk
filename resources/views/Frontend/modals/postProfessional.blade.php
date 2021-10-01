               {{-- <div class="modal fade my_details_popup professional_details show" id="postProfessional" tabindex="-1"
                   aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Add a professional detail</h5>
                               <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                           </div>
                           <div class="modal-body">
                               <div class="row">
                                   <div class="col-md-12 col-12 personal_box3">
                                       <div class="form">
                                           <form action="">
                                               <label for="" class="labels">Buisness name</label>
                                               <input type="text" class="textarea"
                                                   placeholder="James Electricals" value="{{ Auth::user()->UserBusinessDetail->business_name??'' }}">
                                               <label for="" class="labels">Business phone</label>
                                               <input type="number" class="textarea" placeholder="123 456 789" value="{{ Auth::user()->UserBusinessDetail->business_phone??'' }}">
                                               <label for="" class="labels">About my business</label>
                                               <textarea class="textarea">{{ Auth::user()->UserBusinessDetail->business_details??'' }}</textarea>
                                                <label for="" class="labels">Professional Category</label>
                                                <select name="category" class="details">
                                                   <option value="">Option 1</option>
                                                   <option value="">Option 2</option>
                                                   <option value="">Option 3</option>
                                                   <option value="">Option 4</option>
                                               </select>

                                               <div class="changepass edit_business_btn">
                                                <h4>Add a business service <i class="fas fa-plus" id="add_new_business"
                                                        style="cursor: pointer;"></i></h4>
                                            </div>
                                            <div id="add_new_business_inputs" style="display:none;">
                                                <input type="text" class="p_textarea" id="service_name"
                                                    placeholder="Service name">
                                                <button class="btn btn-sm"
                                                    style="padding: 4px;margin-left: 5px;font-size: 11px;margin-bottom: 5px;border: 1px solid;border-radius: 8px;"
                                                    id="add_new_business_service">Add</button>
                                            </div>
                                            

                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div> --}}
