<?php

namespace App\Cells;



class MainNavMenu
{
    public function show()
    {
        return '<nav class="navbar navbar-expand-lg container-xl">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img-defaults/site-logo.png" alt="Site-Logo" width="75" height="75">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav text-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/portfolios">Portfolio Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/auth/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>';
    }
}