  <div class="col-md-4 mb-4 d-flex justify-content-center">
      <div class="row g-0">
          <div class="card" style="width: 18rem;">
              <div class="flex items-center gap-2">
                  <span style="{{ $vehicle->operational_status_color }}"
                      class="px-2 py-1 text-xs font-semibold rounded-md">
                      {{ $vehicle->operational_status_label }}
                  </span>
              </div>
              @if ($vehicle->image)
                  <img class="card-img-top" src="{{ asset('img/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->name }}"
                      class="h-24 md:h-48 object-contain">
              @endif

              <div class="card-body">
                  <h5 class="card-title">{{ $vehicle->name }}</h5>
                  <p class="text-sm text-blue-500">{{ $vehicle->vehicle_category->name ?? '-' }}</p>
                  <p class="card-text"><strong>Harga Sewa :</strong> Rp
                      {{ number_format($vehicle->price_per_day, 0, ',', '.') }}/<span
                          class="text-gray-400 text-base">hari</span></p>
                  <a href="" class="btn btn-primary">View
                      Details</a>
                  <button class="btn btn-success">
                      Booking
                  </button>
              </div>
          </div>
      </div>
  </div>
