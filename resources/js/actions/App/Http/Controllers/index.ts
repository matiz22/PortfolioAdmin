import ProficienciesApi from './ProficienciesApi'
import SkillsApi from './SkillsApi'
import TechnologiesApi from './TechnologiesApi'
import SocialLinksApi from './SocialLinksApi'
import RealizationsApi from './RealizationsApi'
import ProjectsApi from './ProjectsApi'
import JobsApi from './JobsApi'
import EducationApi from './EducationApi'
import CertificationsApi from './CertificationsApi'
import MailController from './MailController'

const Controllers = {
    ProficienciesApi: Object.assign(ProficienciesApi, ProficienciesApi),
    SkillsApi: Object.assign(SkillsApi, SkillsApi),
    TechnologiesApi: Object.assign(TechnologiesApi, TechnologiesApi),
    SocialLinksApi: Object.assign(SocialLinksApi, SocialLinksApi),
    RealizationsApi: Object.assign(RealizationsApi, RealizationsApi),
    ProjectsApi: Object.assign(ProjectsApi, ProjectsApi),
    JobsApi: Object.assign(JobsApi, JobsApi),
    EducationApi: Object.assign(EducationApi, EducationApi),
    CertificationsApi: Object.assign(CertificationsApi, CertificationsApi),
    MailController: Object.assign(MailController, MailController),
}

export default Controllers