CREATE TABLE IF NOT EXISTS "migrations"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "migration"
  varchar
  not
  null,
  "batch"
  integer
  not
  null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  varchar
  not
  null,
  "email"
  varchar
  not
  null,
  "email_verified_at"
  datetime,
  "password"
  varchar
  not
  null,
  "remember_token"
  varchar,
  "created_at"
  datetime,
  "updated_at"
  datetime
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email"
  varchar
  not
  null,
  "token"
  varchar
  not
  null,
  "created_at"
  datetime,
  primary
  key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id"
  varchar
  not
  null,
  "user_id"
  integer,
  "ip_address"
  varchar,
  "user_agent"
  text,
  "payload"
  text
  not
  null,
  "last_activity"
  integer
  not
  null,
  primary
  key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key"
  varchar
  not
  null,
  "value"
  text
  not
  null,
  "expiration"
  integer
  not
  null,
  primary
  key("key")
);
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key"
  varchar
  not
  null,
  "owner"
  varchar
  not
  null,
  "expiration"
  integer
  not
  null,
  primary
  key("key")
);
CREATE TABLE IF NOT EXISTS "jobs"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "queue"
  varchar
  not
  null,
  "payload"
  text
  not
  null,
  "attempts"
  integer
  not
  null,
  "reserved_at"
  integer,
  "available_at"
  integer
  not
  null,
  "created_at"
  integer
  not
  null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id"
  varchar
  not
  null,
  "name"
  varchar
  not
  null,
  "total_jobs"
  integer
  not
  null,
  "pending_jobs"
  integer
  not
  null,
  "failed_jobs"
  integer
  not
  null,
  "failed_job_ids"
  text
  not
  null,
  "options"
  text,
  "cancelled_at"
  integer,
  "created_at"
  integer
  not
  null,
  "finished_at"
  integer,
  primary
  key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "uuid"
  varchar
  not
  null,
  "connection"
  text
  not
  null,
  "queue"
  text
  not
  null,
  "payload"
  text
  not
  null,
  "exception"
  text
  not
  null,
  "failed_at"
  datetime
  not
  null
  default
  CURRENT_TIMESTAMP
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "tags"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  text
  not
  null,
  "slug"
  varchar
  not
  null,
  "created_at"
  datetime,
  "updated_at"
  datetime
);
CREATE UNIQUE INDEX "tags_slug_unique" on "tags"("slug");
CREATE TABLE IF NOT EXISTS "proficiencies"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  text
  not
  null,
  "color"
  varchar,
  "created_at"
  datetime,
  "updated_at"
  datetime
);
CREATE TABLE IF NOT EXISTS "skills"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  text
  not
  null,
  "icon"
  varchar,
  "proficiency_id"
  integer,
  "created_at"
  datetime,
  "updated_at"
  datetime,
  "order"
  integer
  not
  null
  default
  '0',
  foreign
  key("proficiency_id") references "proficiencies"("id")
);
CREATE TABLE IF NOT EXISTS "technologies"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  varchar
  not
  null,
  "icon"
  varchar,
  "proficiency_id"
  integer,
  "created_at"
  datetime,
  "updated_at"
  datetime,
  "order"
  integer
  not
  null
  default
  '0',
  foreign
  key("proficiency_id") references "proficiencies"("id")
);
CREATE TABLE IF NOT EXISTS "social_links"(
  "id"
  integer
  primary
  key
  autoincrement
  not
  null,
  "name"
  varchar
  not
  null,
  "url"
  varchar
  not
  null,
  "icon"
  varchar,
  "order"
  integer
  not
  null
  default
  '0',
  "created_at"
  datetime,
  "updated_at"
  datetime
);
CREATE TABLE IF NOT EXISTS "project_technology"(
  "id" integer primary key autoincrement not null,
  "project_id" integer not null,
  "technology_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("project_id") references "projects"("id") on delete cascade,
  foreign key("technology_id") references "technologies"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "job_listings"(
  "id" integer primary key autoincrement not null,
  "company_name" varchar not null,
  "title" text not null,
  "location" varchar,
  "start_date" date,
  "end_date" date,
  "is_current" tinyint(1) not null default '0',
  "description" text,
  "order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "job_listing_skill"(
  "id" integer primary key autoincrement not null,
  "job_listing_id" integer not null,
  "skill_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("job_listing_id") references "job_listings"("id") on delete cascade,
  foreign key("skill_id") references "skills"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "job_listing_technology"(
  "id" integer primary key autoincrement not null,
  "job_listing_id" integer not null,
  "technology_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("job_listing_id") references "job_listings"("id") on delete cascade,
  foreign key("technology_id") references "technologies"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "education"(
  "id" integer primary key autoincrement not null,
  "institution" text not null,
  "degree" text not null,
  "field_of_study" text not null,
  "grade" varchar,
  "start_date" date not null,
  "end_date" date,
  "is_current" tinyint(1) not null default '0',
  "order" integer not null default '0',
  "description" text,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "education_skill"(
  "id" integer primary key autoincrement not null,
  "education_id" integer not null,
  "skill_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("education_id") references "education"("id") on delete cascade,
  foreign key("skill_id") references "skills"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "education_technology"(
  "id" integer primary key autoincrement not null,
  "education_id" integer not null,
  "technology_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("education_id") references "education"("id") on delete cascade,
  foreign key("technology_id") references "technologies"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "certifications"(
  "id" integer primary key autoincrement not null,
  "name" text not null,
  "issuing_organization" varchar not null,
  "issue_date" date,
  "expiration_date" date,
  "credential_id" varchar,
  "credential_url" varchar,
  "order" integer not null default '0',
  "description" text,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "certification_skill"(
  "id" integer primary key autoincrement not null,
  "certification_id" integer not null,
  "skill_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("certification_id") references "certifications"("id") on delete cascade,
  foreign key("skill_id") references "skills"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "certification_technology"(
  "id" integer primary key autoincrement not null,
  "certification_id" integer not null,
  "technology_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("certification_id") references "certifications"("id") on delete cascade,
  foreign key("technology_id") references "technologies"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "realizations"(
  "id" integer primary key autoincrement not null,
  "title" text not null,
  "client_name" varchar not null,
  "client_url" varchar,
  "client_logo_url" varchar,
  "location" varchar,
  "thumbnail_url" varchar,
  "description" text,
  "order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "realization_skill"(
  "id" integer primary key autoincrement not null,
  "realization_id" integer not null,
  "skill_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("realization_id") references "realizations"("id") on delete cascade,
  foreign key("skill_id") references "skills"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "realization_technology"(
  "id" integer primary key autoincrement not null,
  "realization_id" integer not null,
  "technology_id" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("realization_id") references "realizations"("id") on delete cascade,
  foreign key("technology_id") references "technologies"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "projects"(
  "id" integer primary key autoincrement not null,
  "title" text not null,
  "short_desc" text,
  "home_page" tinyint(1) not null default '0',
  "published" tinyint(1) not null default '0',
  "slug" varchar not null,
  "thumbnail_url" varchar,
  "live_url" varchar,
  "repo_url" varchar,
  "description" text,
  "order" integer not null default('0'),
  "created_at" datetime,
  "updated_at" datetime,
  "screenshots" varchar
);
CREATE UNIQUE INDEX "projects_slug_unique" on "projects"("slug");
CREATE TABLE IF NOT EXISTS "__temp__projects"(
  "id" integer primary key autoincrement not null,
  "title" text not null,
  "slug" varchar not null,
  "thumbnail_url" varchar,
  "live_url" varchar,
  "repo_url" varchar,
  "description" text,
  "order" integer not null default('0'),
  "created_at" datetime,
  "updated_at" datetime,
  "screenshots" varchar,
  "home_page" tinyint(1) not null default('0'),
  "published" tinyint(1) not null default('0'),
  "short_desc" text not null
);

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2025_08_04_124106_create_tags_table',1);
INSERT INTO migrations VALUES(5,'2025_08_06_184225_create_proficiencies_table',2);
INSERT INTO migrations VALUES(15,'2025_08_06_194058_create_skills_table',3);
INSERT INTO migrations VALUES(16,'2025_08_07_193504_create_technologies_table',3);
INSERT INTO migrations VALUES(19,'2025_08_09_094224_create_social_links_table',4);
INSERT INTO migrations VALUES(20,'2025_08_09_185555_create_projects_table',5);
INSERT INTO migrations VALUES(21,'2025_08_15_094033_adding_screenshots',5);
INSERT INTO migrations VALUES(22,'2025_08_15_111907_adding_technologies_relation',5);
INSERT INTO migrations VALUES(23,'2025_08_15_120945_create_jobs_table',5);
INSERT INTO migrations VALUES(24,'2025_08_15_131932_create_education_table',5);
INSERT INTO migrations VALUES(25,'2025_08_15_140153_create_certifications_table',5);
INSERT INTO migrations VALUES(26,'2025_08_15_144459_create_realizations_table',5);
INSERT INTO migrations VALUES(32,'2025_08_28_115348_add_on_main_page_and_short_desc',6);
