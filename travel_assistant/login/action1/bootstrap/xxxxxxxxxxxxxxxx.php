select
cd_city=city_name
cd_district=district_name
from
cd_city
inner join cd_districts on districts.id=cd_city.district_id