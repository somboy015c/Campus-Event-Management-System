<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                            <a href="<?php echo generate_category_url($category); ?>">
                                <div class="member-list-item" style="min-height: 138px;display: table;width: 100%;padding: 5px 5px 5px;box-sizing: border-box;color: #676b6d;font-size: 14px;line-height: 19px;border: 1px solid rgba(182, 180, 180, .25);background: #fff;color: #676b6d;transition: box-shadow 0.25s ease;margin-bottom: 18px;box-shadow: 0px 1px 5px 0px rgba(210, 200, 200, .5); border-radius: 6px;">
                                    
                                    <div class="row-custom" style="width: 100%; height: 220px; margin-bottom: 10px;">
                                        
                                            <img src="<?php echo $category->image_1; ?>" data-src="<?php echo get_category_image_url($category, 'image_1'); ?>" alt="category" style=" border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: middle;width: 100%; height: 100%;">
                                        
                                    </div>
                                    <div class="row-custom" style="padding-left: 10px; padding-right: 10px;">
                                        <div class="row-custom">
                                            <label class="" style="font-size: 18px;"><p class="username" style=" margin: 0px;"><?php echo html_escape(character_limiter(get_category_name_by_lang($category->id, $this->selected_lang->id), 13, '..')); ?>
                                            </p></label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
