<template>
    <ContentWrapper>
        <div class="unwrap">
            <div class="bg-cover">
                <div class="container container-md py-4">
                    <div class="text-center mb-3 pb-3">
                        <div class="h1 text-bold">Help Center</div>
                        <p>User our Help Center to quickly find answers</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-md">
            <form action="#">
                <div class="input-group input-group-lg">
                    <input class="form-control form-control-lg rounded-0" type="text" name="term" placeholder="Search" />
                    <select class="form-control form-control-lg">
                        <option>All Products</option>
                        <option>Templates</option>
                        <option>Servers</option>
                        <option>Billing</option>
                        <option>Buyers</option>
                        <option>Sellers</option>
                        <option>Plans</option>
                        <option>Accounts</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-info btn-lg b0 rounded-0" type="button">
                            <strong>Search</strong>
                        </button>
                    </div>
                </div>
            </form>
            <p class="my-3 py-4 text-muted text-center">
                <small>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</small>
            </p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-primary" href="#">
                                <em class="fa-5x fas fa-tv mb-3"></em>
                                <br/>
                                <span class="h4">All Products</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-info" href="#">
                                <em class="fa-5x fa fa-object-group mb-3"></em>
                                <br/>
                                <span class="h4">Templates</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-purple" href="#">
                                <em class="fa-5x fa fa-cubes mb-3"></em>
                                <br/>
                                <span class="h4">Servers</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-warning" href="#">
                                <em class="fa-5x far fa-gem mb-3"></em>
                                <br/>
                                <span class="h4">Buyers</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-danger" href="#">
                                <em class="fa-5x far fa-building mb-3"></em>
                                <br/>
                                <span class="h4">Sellers</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-success" href="#">
                                <em class="fa-5x far fa-calendar-check mb-3"></em>
                                <br/>
                                <span class="h4">Billing</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-dark" href="#">
                                <em class="fa-5x fa fa-recycle mb-3"></em>
                                <br/>
                                <span class="h4">Plans</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b">
                        <div class="card-body text-center">
                            <a class="link-unstyled text-dark" href="#">
                                <em class="fa-5x fa fa-street-view mb-3"></em>
                                <br/>
                                <span class="h4">Accounts</span>
                                <br/>
                                <div class="text-sm text-muted">View all &rarr;</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ContentWrapper>
</template>
