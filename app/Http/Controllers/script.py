import openrouteservice as ors
import folium
import PYTHON_API_KEYS
import sys

ors_key = "5b3ce3597851110001cf6248a60fa16754aa420ca422222f0db6e901"

client.ors.Client(key = ors_key)
coordinates = sys.argv[1]

route = client.directions(coordinates = coordinates,
                            profile = 'driving-car',
                            format = 'geojson')

map_directions = folium.Map(location = [33.77, -84.37], zoom_start = 5)

folium.GeoJson(route, name = 'route').add_to(map_directions)

folium.LayerControl().add_to(map_directions)

map_directions

print(route['features'][0]['properties']['segments'][0]['distance']*0.000621371, 'miles')
print(route['features'][0]['properties']['segments'][0]['duration']*0.000277778, 'hours\n')

print('directions')
for index, i in enumerate(print(route['features'][0]['properties']['segments'][0]['steps'])):
        print(index+1, 1, '\n')


